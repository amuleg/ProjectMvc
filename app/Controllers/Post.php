<?php

namespace App\Controllers;

class Post
{
    public function index()
    {
        var_dump('Hello, I\'m Post');
    }
    public function test()
    {
        var_dump('Hello, I\'m Post Test Method');
    }
    public function error()
    {
        var_dump('Hello, I\'m Post Error Method');
    }
}