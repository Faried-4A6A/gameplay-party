<?php

// class contactsController handelt de contact functionaliteiten

class contactsController {

    public function __construct(){
    }
    public function __destruct() {}

    /**
     * toont de contact pagina
     */
    public function contact() {
        require "view/contact.php";
    }

    /**
     * toont de algemenevoorwaarden
     */
    public function algemenevoorwaarden() {
        require "view/algemenevoorwaarden.php";
    }


}

?>
