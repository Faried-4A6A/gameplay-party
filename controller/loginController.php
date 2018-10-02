<?php
require_once 'model/loginLogic.php';

class loginController {


    public function __construct(){
        $this->loginLogic = new loginLogic();
    }
    public function __destruct() {}


    public function login() {
        require "view/login.php";
    }



}

?>
