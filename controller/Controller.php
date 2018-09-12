<?php
require './model/contactsLogic.php';

class ContactsController
{

    public function __construct()
    {
        $this->ContactsLogic = new ContactsLogic();
    }

    public function __destruct()
    {
    }

    public function handleRequest()
    {
        $op = isset($_GET["op"]) ? $_GET["op"] : "";
        try {
            switch ($op) {
                case "create";
                    $this->collectCreateContact();
                    break;
                case "read";
                    $this->collectReadContact();
                    break;
                case "update";
                    $this->collectUpdateContact();
                    break;
                case "search";
                    $this->collectUpdateContact();
                    break;
                case "delete";
                    $this->collectDeleteContact();
                    break;
                case "table":
                    $this->collectTableContacts();
                    break;
                default:
                    $this->collectReadContacts();
                    break;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function collectCreateContact()
    {
        if (isset($_POST['name'])) {
            $create = $this->ContactsLogic->createContact($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['location']);
            $this->collectReadContact($create);
        } else {
            include 'view/form.php';
        }
    }

    public function collectReadContact()
    {
        if (isset($_GET['id'])) {
            $contacts = $this->ContactsLogic->readContact($_GET['id']);
            $btn = $this->btnInArray($contacts);
            $result = $this->printTable($btn);
            include 'view/contacts.php';
        } else {
            $this->collectReadContacts();
        }
    }

    public function collectReadContacts()
    {
        $contacts = $this->ContactsLogic->readContacts();
        $btn = $this->btnInArray($contacts);
        $result = $this->printTable($btn);
        include 'view/contacts.php';
    }

    public function collectUpdateContact()
    {
        if (isset($_POST['send'])) {
            $contacts = $this->ContactsLogic->updateContact($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['location'], $_GET['id']);
            $this->collectReadContact($_GET['id']);
        } else {
            $data = $this->ContactsLogic->readContact($_GET['id'])[0];
            include 'view/updateForm.php';
        }
    }

    public function collectTableContacts(){
        $contacts = $this->ContactsLogic->readContacts();
        $btn = $this->btnInArray($contacts);
        $result = $this->printTable($btn);
        include 'view/viewAll.php';
    }

    public function collectDeleteContact()
    {
        $delete = $this->ContactsLogic->deleteContact($_GET['id']);
        $this->collectReadContacts();
    }

    function btnInArray($array)
    {
        foreach ($array as $key => $value) {
            $array[$key]["Action"] =
                "<a href='index.php?op=read&id=$value[id]'><button class='btn btn-primary'>Read</button></a>
                 <a href='index.php?op=update&id=$value[id]'><button class='mx-1 btn btn-success'>Update</button></a>
                 <a href='index.php?op=delete&id=$value[id]'><button class='btn btn-danger'>Delete</button></a>";
        }
        return $array;
    }

    function printTable($array)
    {
        $table = "<table class='table'>";

        foreach ($array as $key => $value) {
            $table .= "<thead class='thead-inverse'><tr>";

            foreach ($value as $k => $v) {
                $table .= "<th>" . $k . "</th>";
            }
            break;
        }
        foreach ($array as $k => $v) {
            $table .= "<tr>";
            foreach ($v as $key => $value) {
                $table .= "<td>" . $value . "</td>";
            }
        }
        $table .= "</table>";
        return $table;
    }
}

?>