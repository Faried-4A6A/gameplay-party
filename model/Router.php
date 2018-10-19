<?php

// class Router
//     {
//         public function __construct() 
//         {
//             $url = $_SERVER['REQUEST_URI'];

//             $packets = explode('/',$url);

//             $this->determineDestination($packets);
//         }   
//         public function determineDestination($packets='')
//         {
//             if(!isset($packets[1]) && empty($packets[1])){
//                 $class = "homeController";
//             } else {
//                 $class = $packets[1];
//             }
//            if(!isset($packets[2]) && empty($packets[2])){
//                 $method = "home";
                
//             } else {
//                 $method = $packets[2];
//             }
//                 $this->sendToDestination($class, $method, array_slice($packets, 4));
//         }
//         public function sendToDestination($classname, $method, $params)
//         {
//             $class =  APP_DIR . 'controller/' . $classname . '.php';
//             require_once($class);
//             $obj = new $classname;
//             die(call_user_func_array(array($obj, $method), $params));
//         }
//     }

/**
 * Class Router
 */
    class Router
    {
        /**
         * Router constructor.
         */
        public function __construct() 
        {

            $url = $_SERVER['REQUEST_URI'];

                // $url = trim($url, "/");

            $packets = explode('/',$url);
            
            $this->determineDestination($packets);
        }

        /**
         * Dit is de functie waar de bestemming wordt bepaald
         * @param string $packets
         */
        public function determineDestination($packets='')
        {
            if(!isset($packets[1]) && empty($packets[1])){
                $class = "homecontroller";
            } else {
                $class = $packets[1];
            }
           if(!isset($packets[2]) && empty($packets[2])){
                $method = "home";
                
            } else {
                $method = $packets[2];
            }

                $this->sendToDestination($class, $method, array_slice($packets, 4));
        }

        /**
         * Dit is een functie waar de class wordt verstuurd
         * @param $classname
         * @param $method
         * @param $params
         */
        public function sendToDestination($classname, $method, $params)
        {
            $class =  APP_DIR . 'controller/' . $classname . '.php';
            require_once($class);

            $obj = new $classname;
            die(call_user_func_array(array($obj, $method), $params));
        }

    }

 ?>
