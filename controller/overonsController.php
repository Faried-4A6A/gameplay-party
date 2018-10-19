<?php

// class overonsController handelt de overons functionaliteiten
class overonsController {

    public function __construct(){
    }
    public function __destruct() {}

    /**
     * toont de overons pagina
     */
    public function overons() {
        require "view/over_ons.php";
    }



}

?>
