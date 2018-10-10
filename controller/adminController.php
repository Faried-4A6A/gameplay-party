<?php

require_once 'model/userModel.php';
require_once 'model/HtmlElements.php';
require_once 'model/dataLogic.php';

class adminController
{    
    function __construct()
    {
        $this->userModel = new userModel;
        $this->userModel->checkUserRole(["admin"]);
        $this->htmlElements = new HtmlElements();
        $this->dataLogic = new dataLogic();

    }
    function adminPanel(){
        require_once('view/adminPanel.php');
    }
    function addBios(){
        $form = $this->htmlElements->createForm('', $this->dataLogic->describeForm());
        include 'view/addBios.php';
    }
}