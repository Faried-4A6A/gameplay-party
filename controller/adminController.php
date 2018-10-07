<?php

require_once('model/adminModel.php');
require_once('model/userModel.php');

class adminController
{    
    function __construct()
    {
        $this->adminModel = new adminModel;
        $this->userModel = new userModel;
        $this->userModel->checkUserRole(["admin"]);

    }
}