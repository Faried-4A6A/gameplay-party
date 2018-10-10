<?php
require_once 'model/dataLogic.php';
require_once 'model/HtmlElements.php';
require_once 'model/dataLogic.php';

class catalogusController
{
	function __construct()
	{
		$this->htmlElements = new HtmlElements();
        $this->dataLogic = new dataLogic();
	}
	public function catalogus()
	{
		$bioscopen = $this->dataLogic->readCatalogus();
		include('view/catalogus.php');
	}
	public function reseveren(){
		include('view/reseveren.php');
        }
}
