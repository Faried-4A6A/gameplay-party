<?php
require_once('model/dataHandler.php');

/**
 * Class dataLogic
 */
class dataLogic {
    /**
     * dataLogic constructor.
     */
    public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

    /**
     * Dit is een functie om alle waarde van de bioscopen te wijzen
     * @return array
     */
    public function readCatalogus()
    {
       $query = 'SELECT * FROM bioscopen';
       $bioscopen = $this->dataHandler->ReadData($query);
       return $bioscopen;
    }

    /**
     * Dit is een functie om
     * @return array
     */
    public function describeForm()
    {
        return $this->dataHandler->ReadData("DESCRIBE gameplayparty.bioscopen");
    }

    /**
     * Dit is een functie om de homepagina content aan te passen.
     * @return array
     */
    public function updateHome()
    {
        return $this->dataHandler->ReadData("SELECT `cms_content` FROM `cms` WHERE `cms_id` = 1");
    }

    /**
     * Dit is een functie om bioscopen toe te voegen
     * @param $bios_naam
     * @param $adres
     * @param $postcode
     * @param $stad
     * @param $provincie
     * @param $bereikbaar_auto
     * @param $bereikbaar_ov
     * @param $bereikbaar_fiets
     * @param $rolstoeltoegankelijkheid
     * @param $voorwaarden
     * @return string
     * @throws Exception
     */
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
