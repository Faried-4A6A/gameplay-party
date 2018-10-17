<?php
require_once 'model/dataLogic.php';
class homeController {


    public function __construct(){
        $this->dataLogic = new dataLogic();
    }
    public function __destruct() {}


    public function home() {
        $homeText = $this->dataLogic->updateHome();
        require "view/home.php";
    }



}

?>
