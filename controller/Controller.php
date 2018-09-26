<?php

class Controller {


    public function __construct(){
    }
    public function __destruct() {}


<<<<<<< HEAD
=======
    public function overzicht() {
        require "view/overzicht.php";
    }

>>>>>>> origin/master
    public function home() {
        require "view/home.php";
    }

    public function overons() {
        require 'view/over_ons.php';
    }

    public function overons() {
        include "view/over_ons.php";
    }

    public function contact() {
        include "view/contact.php";
    }

}

?>
