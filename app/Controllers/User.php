<?php

namespace App\Controllers;

class User 
{
    public function index()
    {
        var_dump('Hello, I\'m User');
    }
    public function test()
    {
        var_dump('Hello, I\'m User Test Method');
    }
    public function error()
    {
        var_dump('Hello, I\'m User Error Method');
    }
}