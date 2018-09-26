<?php

/**
 * [Router URl knippen]
 */

    class Router
    {
        public function __construct()
        {

            $url = $_SERVER['REQUEST_URI'];

            $packets = explode('/',$url);

            $this->determineDestination($packets);

        }

        public function determineDestination($packets='')
        {


            if (isset($packets[1]) && $packets[1] !='' && isset($packets[2]) && $packets[2] !=''){
                $this->sendToDestination($packets[1], $packets[2], array_slice($packets, 4));
            }else{
                echo "";
            }
        }


        public function sendToDestination($classname,$method,$params)
        {
            $class =  APP_DIR . 'controller/' . $classname . '.php';
            require_once($class);

            $obj = new $classname;
            die(call_user_func_array(array($obj, $method), $params));
        }

        public function __destruct()
        {
            # code...
        }
    }
 ?>
