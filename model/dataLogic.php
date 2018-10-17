<?php
require_once('model/dataHandler.php');

class dataLogic {

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

    public function describeForm()
    {
        return $this->dataHandler->ReadData("DESCRIBE gameplayparty.bioscopen");
    }
    
    public function createBios($bios_naam, $adres, $postcode, $stad, $provincie, $bereikbaar_auto, $bereikbaar_ov, $bereikbaar_fiets, $rolstoeltoegankelijkheid, $voorwaarden)
    {
        try {
            return $this->dataHandler->CreateData("INSERT INTO bioscopen(`bios_naam`,`adres`,`postcode`,`stad`,`provincie`,`bereikbaar_auto`,`bereikbaar_ov`,`bereikbaar_fiets`,`rolstoeltoegankelijkheid`,`voorwaarden`) 
            VALUES ('$bios_naam', '$adres', '$postcode', '$stad', '$provincie', '$bereikbaar_auto', '$bereikbaar_ov', '$bereikbaar_fiets', '$rolstoeltoegankelijkheid', '$voorwaarden')");
        } catch (Exeption $e) {
            throw $e;
        }
    }


}
