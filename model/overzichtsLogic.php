<?php
require_once('model/dataHandler.php');

class overzichtsLogic {

    public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    public function readCatalogus()
    {
       $query = 'SELECT * FROM bioscopen';
       $bioscopen = $this->dataHandler->ReadData($query);
       return $bioscopen;
    }
}
