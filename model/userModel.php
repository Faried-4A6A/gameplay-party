<?php

require_once('model/dataHandler.php');

/**
 * Class userModel
 */
class userModel {
    /**
     * userModel constructor.
     */
	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
        $this->isLoggedIn = false;
        $this->sessionLogin();
    }

    /**
     * Dit is een functie om het gebruiker te latem zien
     * @param null $username
     * @return array
     */
    public function read($username = null) {
        if(!$username) {
            return $this->dataHandler->readData(" SELECT *, `roles`.`name` as `role` FROM `users` INNER JOIN `roles` ON `roles`.`id` = `users`.`role_id`");

        } else {
            return $this->dataHandler->readData("SELECT *, `roles`.`name` as `role` FROM `users` INNER JOIN `roles` ON `roles`.`id` = `users`.`role_id` WHERE `username` = `username`")[0];
        }
    }

    /**
     * dit is een functie voor het inloggen in session
     * @return bool
     */
    public function sessionLogin() {
        if(isset($_SESSION["user"])) {
            // logges in the user, also updates the user info if changed
            $this->user = $this->read($_SESSION["user"]["username"]);
            $_SESSION["user"] = $this->user;
            $this->isLoggedIn = true;
            return true;
        }
        return false;
    }

    /**
     * dit is een functie voor het inloggen
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function login(string $username, string $password) {
        if($this->checkPassword($username, $password)) {
            $this->user = $this->read($username);
            $_SESSION["user"] = $this->user;
            $this->isLoggedIn = true;
            return true;
        }
        return false;
    }

    /**
     * dit is een functie om de rollen in te checken
     * @param $roles
     */
    public function checkUserRole($roles) {
        if(!$this->isLoggedIn || !in_array($this->user["role"], $roles))
            return header("Location: /loginController/login");
    }
        /**
     * genereerd een BCRYPT wachtwoord
     *
     * @param string $password wachtwoord die je wilt encrypten
     * @return string password hash
     */
    public function generatePassword(string $password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    /**
     * check de ingevulde wachtwoord als het het correct is
     *
     * @param string $username is een gebruikersnaam
     * @param string $password is het wachtwoord
     * @return bool
     */
    public function checkPassword(string $username, string $password) {
        $user = $this->read($username);
        // var_dump($user);
        if($user)
            return password_verify($password, $user["password"]);
        else
            return false;
    }

}
