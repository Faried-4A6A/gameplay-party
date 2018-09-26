<?php

class HomeController {

    public $Contactslogic;

    public function __construct(){
    }
    public function __destruct() {}
    public function handleRequest() {
        try {
            switch (isset($_GET['op']) ? $_GET['op'] : "") {
                case 'create':
                    $this->collectCreateContact();
                    break;
                case 'update':
                    $this->collectUpdateContact();
                    break;
                case 'delete':
                    $this->collectDeleteContact();
                    break;
                case 'read':
                    $this->collectReadContact();
                    break;
                default:
                    $this->collectReadContacts();
            }
        } catch (Exception $e){
            throw $e;
        }
    }    
    
    public function read($read) {
        echo $read;
    }

}

?>