<?php require_once 'DataHandler.php';

class ContactsLogic
{

    public $DataHandler;

    public function __construct()
    {
        $this->DataHandler = new DataHandler("mysql", "localhost", "mvc", "root", "");
    }

    public function createContact($name, $tel, $mail, $location)
    {
        try {
            return $this->DataHandler->CreateData("INSERT INTO contacts (name, phone, email, location) VALUES ('$name','$tel','$mail','$location')");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    public function readContact($id)
    {
        try {
            return $this->DataHandler->ReadData("SELECT * FROM contacts WHERE id = '$id'");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    public function readContacts()
    {
        try {
            return $this->DataHandler->ReadData("SELECT * FROM contacts");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    public function updateContact($name, $tel, $mail, $location, $id)
    {
        return $this->DataHandler->updateData("UPDATE contacts SET `name` = '$name', `phone` = '$tel', `email` = '$mail', `location` = '$location' WHERE id = '$id'");
    }

    public function deleteContact($id) {
        return $this->DataHandler->DeleteData("DELETE FROM contacts WHERE id = $id");
    }

}

?>