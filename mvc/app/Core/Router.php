<?php

namespace App\Core;

class Router
{
    private const METHOD = "index";
    private const CONTROLLER_PATH = "App\Controllers\\";
    private array $route = [];
    public function __construct()
    {
        $this->route = require_once __DIR__ . "/../../config/router.php";
    }
    public function run(): void
    {
         var_dump($_SERVER);
        if (!empty($_SERVER["QUERY_STRING"])) {
            if (array_key_exists($_SERVER["QUERY_STRING"], $this->route)) {
                $separateUrl = explode(":", $this->route[$_SERVER["QUERY_STRING"]]);
                $route = ucfirst($separateUrl[0]);
            } else {
                $route = "Error";
            }
        } else {
            $route = "Main";
        }

        $method = $separateUrl[1] ?? self::METHOD;
        $controllerNameSpace = self::CONTROLLER_PATH . $route;
        
        if (!class_exists($controllerNameSpace)) {
            $controllerNameSpace = self::CONTROLLER_PATH . "Error";
        }

        $controller = new $controllerNameSpace();
        if (!method_exists($controller, $method)) {
            $method = "error";
        }

        $controller->$method();
    }
}
