<?php 
require_once 'dataHandler.php';
      
// require_once 'HtmlElements.php';

class loginLogic
{
    public $DataHandler;

    public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

    public function createProduct($ean, $discount, $name, $details, $price, $brand, $resolution, $platform, $refresh_rate, $color, $functions, $connections, $accessiores)
    {
        try {
            return $this->DataHandler->CreateData("INSERT INTO product (EAN, discount, name, details, price, brand, resolution, platform, refresh_rate, color, functions, connections, accessoires) VALUES ('$ean', '$discount', '$name', '$details', '$price', '$brand', '$resolution', '$platform', '$refresh_rate', '$color', '$functions', '$connections', '$accessiores')");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    public function checkLogin(){
        if(isset($_POST['submit'])){

            $naam = mysqli_real_escape_string($this->DataHandler, $_POST['naam']);
            $wachtwoord = mysqli_real_escape_string($this->DataHandler, $_POST['ww']);

            // error handling
            // check of het leeg is

            if (empty($naam) || empty($wachtwoord)){
                header("Location: http://localhost/logincontroller/login/empty");
                exit();
            }else{
                // valideer input
                if(!preg_match("/^[]a-zA-Z*$", $naam)){
                    header("Location: http://localhost/logincontroller/login/invalid");
                    exit();
                } else {
                    $sql = "SELECT * from gebruikers WHERE gebruikers_naam = '$naam'";
                    $result = mysqli_qeury($this->DataHandler)
                }

            }
        }else {
            header("Location: http://localhost/logincontroller/login");
            exit();
        }
    }
}