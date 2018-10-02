<?php
require_once('model/overzichtsLogic.php');

class overzichtController
{	
	function __construct()
	{
		$this->model = new overzichtsLogic;
	}
	public function overzicht() 
	{
		$bioscopen = $this->model->readCatalogus();
		include('view/overzicht.php');
	}
	// public function addCatalogus() 
	// {
	// 	// $bioscopen = $this->model->readCatalogus();
	// 	include('view/addBios.php');
	// }
}
