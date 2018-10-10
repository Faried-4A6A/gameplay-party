<?php

class contactsController {


    public function __construct(){
    }
    public function __destruct() {}


    public function contact() {
        require "view/contact.php";
    }

    public function algemenevoorwaarden() {
        require "view/algemenevoorwaarden.php";
    }


}

?>
