<?php

require_once 'model/userModel.php';
require_once 'model/HtmlElements.php';
require_once 'model/adminModel.php';
require_once 'model/dataLogic.php';

// class admincontroller handelt de admin functionaliteiten
class adminController
{
    /**
     verwijst de functionaliteiten van de klasse door
     */
    function __construct()
    {
        $this->userModel = new userModel;
        $this->userModel->checkUserRole(["admin"]);
        $this->htmlElements = new HtmlElements();
        $this->dataLogic = new dataLogic();
        $this->adminModel = new adminModel;

    }

// toont de admin panel
    function adminPanel(){
        require_once('view/adminPanel.php');
    }

    /**
     * voegt een bios toe
     *
     */
    function addBios(){
        if (isset($_POST['send'])) {
            $create = $this->dataLogic->createBios($_POST['bios_naam'], $_POST['adres'], $_POST['postcode'], $_POST['stad'], $_POST['provincie'], $_POST['bereikbaar_auto'], $_POST['bereikbaar_ov'], $_POST['bereikbaar_fiets'], $_POST['rolstoeltoegankelijkheid'], $_POST['voorwaarden']);
            include 'view/biosCMS.php';
        } else {
            $form = $this->htmlElements->createForm('', $this->dataLogic->describeForm());
            include 'view/addBios.php';
        }
    }


    // $homeText = $this->dataLogic->updateHome();

    // toont de bios cms pagina
    function biosCMS(){
        require_once('view/biosCMS.php');
    }
   
    // toont de home cms pagina
    function homeCMS(){
        require_once('view/homeCMS.php');
    }

    // toont pagina om de home pagina aan te passen
    function changeHome(){
        require_once('view/changeHome.php');
    }

    // toont de contact cms pagina
    function contactCMS(){
        require_once('view/contactCMS.php');
    }

    /**
     * verzamelt de waardes van het formulier en zet ze in de createbiosfunctie
     * zet waardes in de createbios functie
     * verplaatst geüpload bestand en stuurt je naar de catalogus
     */
    public function collectBios() {
		if(isset($_POST["create"])) {
			$naam = $_POST['bios_naam'];
			$foto = $_FILES['image']["name"];
			$adres = $_POST['adres'];
			$postcode = $_POST['postcode'];
			$stad = $_POST['stad'];
			$provincie = $_POST['provincie'];
			$begintijd = $_POST['begintijd'];
			$eindtijd = $_POST['eindtijd'];
			$auto = $_POST['bereikbaar_auto'];
			$ov = $_POST['bereikbaar_ov'];
			$fiets = $_POST['bereikbaar_fiets'];
			$rolstoel = $_POST['rolstoeltoegankelijkheid'];
			$voorwaarden = $_POST['voorwaarden'];
			$bioscopen = $this->adminModel->createBios($naam, $foto, $adres, $postcode, $stad, $provincie, $begintijd, $eindtijd, $auto, $ov, $fiets, $rolstoel, $voorwaarden);
			if(isset($_POST["create"])) {
            $target_path = "view/images/thumbnails/";
            $target_path = $target_path . basename($_FILES['image']['name']); 
           
   		   if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                echo "The file ".  basename( $_FILES['image']['name']). 
                " has been uploaded";
            } else{
                echo "There was an error uploading the file, please try again!";
            }
        }
			header("Location: ../../catalogusController/catalogus");
			exit;
		} else {
			require_once('view/addBios.php');
		}
		
	}
}