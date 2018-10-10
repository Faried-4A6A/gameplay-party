<?php

require_once('model/userModel.php');

class adminController
{    
    function __construct()
    {
        $this->userModel = new userModel;
        $this->userModel->checkUserRole(["admin"]);

    }
    function adminPanel(){
        require_once('view/adminPanel.php');
    }
    function addBios(){
        require_once('view/addBios.php');
    }
}