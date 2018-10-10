<?php
require_once('model/dataLogic.php');

class overzichtController
{
	function __construct()
	{
		$this->model = new dataLogic;
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
