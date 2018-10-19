<?php

/**
 * Class dataHandler
 */
class dataHandler
{
    /**
     * $conn geeft een connectie met de database
     * @var PDO
     */
    public $conn;
    /**
     * dataHandler constructor.
     * @param $dbtype
     * @param $servername
     * @param $dbname
     * @param $username
     * @param $password
     */
    function __construct($dbtype, $servername, $dbname, $username, $password)
    {
        try {
            $this->conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
     * createData is een blueprint voor waarde creëren
     * @param $sql
     * @return string
     */
    function createData($sql)
    {
        $data = $this->conn->prepare($sql);
        $data->execute();
        return $this->conn->lastInsertId();
    }

    /**
     * readData is een blueprint voor waarde inlezen
     * @param $sql
     * @return array
     */
    function readData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * updateData is een blueprint voor waarde aan te passen
     * @param $sql
     */
    function updateData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    /**
     * deleteData is een blueprint voor een waarde te verwijderen
     * @param $sql
     */
    function deleteData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>