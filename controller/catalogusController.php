<?php
require_once('model/dataLogic.php');

class catalogusController
{
	function __construct()
	{
		$this->model = new dataLogic;
	}
	public function catalogus()
	{
		$bioscopen = $this->model->readCatalogus();
		include('view/catalogus.php');
	}

	// public function addCatalogus()
	// {
	// 	// $bioscopen = $this->model->readCatalogus();
	// 	include('view/addBios.php');
	// }
}
