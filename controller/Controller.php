<?php

class Controller {


    public function __construct(){
    }
    public function __destruct() {}


    public function home() {
        require "view/home.php";
    }

    public function overons() {
        require 'view/over_ons.php';
    }

}

?>