<?php

require_once 'model/dataLogic.php';
require_once 'model/HtmlElements.php';
require_once 'model/dataLogic.php';

// class catalogusController handelt de catalogus functionaliteiten
class catalogusController
{
    /**
    verwijst de functionaliteiten van de klasse door
     */
	function __construct(){
		$this->htmlElements = new HtmlElements();
        $this->dataLogic = new dataLogic();
	}

    /**
     * toont de catalogus pagina
     * $bioscopen array van bioscopen uit de database
     */
	public function catalogus(){
		$bioscopen = $this->dataLogic->readCatalogus();
		include('view/catalogus.php');
	}

    /**
     * toont de reseverings pagina
     */
	public function reseveren(){
		include('view/reseveren.php');
    }

    /**
     * toont de validatie pagina
     */
	public function bedankt(){
		include('view/bedankt.php');
	}
}
