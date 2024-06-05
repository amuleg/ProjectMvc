<?php

namespace App\Core;

class Router
{
    private const METHOD = 'index';
    private const CONTROLLER_PATH = 'App\Controllers\\';
    public function run() : void
    {
        $method = self::METHOD;

        if (!empty($_SERVER["PATH_INFO"])) {
           
            $separateUrl = explode('/', $_SERVER["PATH_INFO"]);
            $route = ucfirst($separateUrl[1]);
            if(isset($separateUrl[2])){
                $method = $separateUrl[2];
            }
        } else {
            $route = 'Main';
        }
       
      $controllerNameSpace = self::CONTROLLER_PATH . $route;

      if (!class_exists($controllerNameSpace)){
        $controllerNameSpace = self::CONTROLLER_PATH . 'Error';
      }
     
      $controller = new $controllerNameSpace();
      if (!method_exists($controller, $method)) {
        $method = 'error';
    }
      $controller->$method();
    }
}

