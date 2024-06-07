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
        if (!empty($_SERVER["PATH_INFO"])) {
            if (array_key_exists($_SERVER["PATH_INFO"], $this->route)) {
                $separateUrl = explode(":", $this->route[$_SERVER["PATH_INFO"]]);
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
