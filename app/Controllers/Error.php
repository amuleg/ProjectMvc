<?php

 namespace App\Controllers;

class Error 
{
    public function index()
    {
        var_dump('Hello, I\'m Error');
    }
    public function test()
    {
        var_dump('Hello, I\'m Error Test Method');
    }
    public function error()
    {
        var_dump('Hello, I\'m Error Error Method');
    }
}