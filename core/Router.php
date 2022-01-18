<?php
require "controllers/PagesController.php";
    class Router{
        protected $routes=[
            // 'GET' => [];
            // 'POST' => [];
        ];
     
        public static function load($filename){
            $router = new Router;
            require $filename;
            return $router;
        }

        public function register($routes){
            $this->routes = $routes;
        }

        public function get($uri, $controller){
            $this->routes['GET'][$uri] = $controller;
        }
        
        public function post($uri, $controller){
            $this->routes['POST'][$uri] = $controller;
        }

        public function direct($uri,$method){
            if(array_key_exists($uri, $this->routes[$method])){
                // $explosion = explode('@', $this->routes[$method][$uri]);
                $explosion = $this->routes[$method][$uri];
                $this->callMethod($explosion[0], $explosion[1]);                        //separate with '@' sign
            }else{
                die('404 page');
            }
        }

        public function callMethod($class, $method){    
            $class = new $class;                                                                    //calling PagesController class
            $class->$method();                                                                      //calling method within PagesController
        }
    }