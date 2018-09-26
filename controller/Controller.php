<?php

class Controller {

    public $Contactslogic;

    public function __construct(){
    }
    public function __destruct() {}

    
    public function read($read = "") {
        echo $read;
    }

}

?>