<?php

require_once('model/dataHandler.php');


class userModel {

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
        $this->isLoggedIn = false;
        $this->sessionLogin();
    }
    public function read($username = null) {
        if(!$username) {
            return $this->dataHandler->readData(" SELECT *, `roles`.`name` as `role` FROM `users` INNER JOIN `roles` ON `roles`.`id` = `users`.`role_id`");
           
        } else {
            return $this->dataHandler->readData("SELECT *, `roles`.`name` as `role` FROM `users` INNER JOIN `roles` ON `roles`.`id` = `users`.`role_id` WHERE `username` = `username`")[0];
        }
    }
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

    public function login(string $username, string $password) {
        if($this->checkPassword($username, $password)) {
            $this->user = $this->read($username);
            $_SESSION["user"] = $this->user;
            $this->isLoggedIn = true;
            return true;
        }
        return false;
    }
    public function checkUserRole($roles) {
        if(!$this->isLoggedIn || !in_array($this->user["role"], $roles))
            return header("Location: /loginController/invoke");
    }
        /**
     * generates a BCRYPT password
     *
     * @param string $password the password you want to encrypt
     * @return string password hash
     */
    public function generatePassword(string $password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    /**
     * check if the filled in password from a user is correct
     *
     * @param string $username the username
     * @param string $password the password
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
