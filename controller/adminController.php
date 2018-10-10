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
            include 'view/addBios.php';
            echo "<div class='alert alert-success' role='alert'>Bios toegevoegdt </div>";
        } else {
            $form = $this->htmlElements->createForm('', $this->dataLogic->describeForm());
            include 'view/addBios.php';
        }
    }
    function biosCMS(){
        require_once('view/biosCMS.php');
    }
    function homeCMS(){
        require_once('view/homeCMS.php');
    }
    function contactCMS(){
        require_once('view/contactCMS.php');
    }
}