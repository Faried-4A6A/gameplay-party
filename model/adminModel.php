<?php
require_once 'model/dataHandler.php';

/**
 * Dit is een Class model van de admin
 */
class adminModel {
    /**
     * adminModel constructor.
     */
	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

    /**
     * Hier is een model dat je een bioscoop kan aanmaken
     * @param $naam
     * @param $foto
     * @param $adres
     * @param $postcode
     * @param $stad
     * @param $provincie
     * @param $begintijd
     * @param $eindtijd
     * @param $auto
     * @param $ov
     * @param $fiets
     * @param $rolstoel
     * @param $voorwaarden
     * @return string
     * @throws Exception
     */
    public function createBios($naam, $foto , $adres, $postcode, $stad, $provincie, $begintijd, $eindtijd, $auto, $ov, $fiets, $rolstoel, $voorwaarden) {

	try {
		if ($rolstoel == "ja") {
			$toegang = 1;
		} else {
			$toegang = 0;
		}
		$sql = "INSERT INTO bioscopen(bios_naam, image, adres, postcode, stad, provincie, begintijd, eindtijd, bereikbaar_auto, bereikbaar_ov, bereikbaar_fiets, rolstoeltoegankelijkheid, voorwaarden) VALUES ('$naam', '$foto' ,'$adres', '$postcode', '$stad', '$provincie', '$begintijd',  '$eindtijd',  '$auto',  '$ov',  '$fiets',  '$toegang', '$voorwaarden')";
		$result = $this->dataHandler->CreateData($sql);
		return $result;
	} catch (Exception $e) {
		throw $e;
	}
		return $result;
	}

    /**
     * Hier weergeeft het alle waarden van tabel paginas
     * @return array
     */
	public function readCMS()
    {
       $query = 'SELECT * FROM paginas';
       $cms = $this->dataHandler->ReadData($query);
       return $cms;
    }
}