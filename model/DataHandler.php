<?php
class dataHandler
{
    
    public $conn;
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
    function createData($sql)
    {
        $data = $this->conn->prepare($sql);
        $data->execute();
        return $this->conn->lastInsertId();
    }
    function readData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function updateData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    function deleteData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
?>