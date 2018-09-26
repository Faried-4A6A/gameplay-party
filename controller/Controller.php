<?php

class Controller {


    public function __construct(){
    }
    public function __destruct() {}

    
    public function home() {
        include "view/home.php";
    }

}

?>