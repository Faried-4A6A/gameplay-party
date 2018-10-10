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
        if (isset($_POST['send'])) {
            $create = $this->dataLogic->createBios($_POST['bios_naam'], $_POST['adres'], $_POST['postcode'], $_POST['stad'], $_POST['provincie'], $_POST['bereikbaar_auto'], $_POST['bereikbaar_ov'], $_POST['bereikbaar_fiets'], $_POST['rolstoeltoegankelijkheid'], $_POST['voorwaarden']);
            $this->adminPanel();
        } else {
            $form = $this->htmlElements->createForm('', $this->dataLogic->describeForm());
            include 'view/addBios.php';
        }
    }
}