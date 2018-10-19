<?php
require_once 'model/dataLogic.php';

// class homeController handelt de home functionaliteiten
class homeController {

    /**
     * homeController constructor.
     * verwijst naar de functionaleiten in een andere klasse
     */
    public function __construct(){
        $this->dataLogic = new dataLogic();
    }
    public function __destruct() {}

    /**
     * toont de home pagina
     * $homeText content tekst van de home pagina
     */
    public function home() {
        $homeText = $this->dataLogic->updateHome();
        require "view/home.php";
    }



}

?>
