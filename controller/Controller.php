<?php

class Controller {


    public function __construct(){
    }
    public function __destruct() {}


    public function home() {
        include "view/home.php";
    }

    public function overons() {
        include "view/over_ons.php";
    }

    public function contact() {
        include "view/contact.php";
    }

}

?>
