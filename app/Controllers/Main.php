<?php

namespace App\Controllers;

class Main 
{
    public function index()
    {
        var_dump('Hello, I\'m Main');
    }
    public function test()
    {
        var_dump('Hello, I\'m Main Test Method');
    }
    public function error()
    {
        var_dump('Hello, I\'m Main Error Method');
    }
}