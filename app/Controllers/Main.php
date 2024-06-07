<?php

namespace App\Controllers;

use App\Core\Viewer;

class Main 
{
    public function index()
    {
        $data = [
            "first" => ['first1'=>'1f', "first2"=>'2f', "first3" => '3f', "first4" => '4f'],
            "second" => ['sec1'=>'1s', "sec2"=>'2s', "sec3" => '3s', "sec4" => '4s']
            ];
            Viewer::view("main/index", $data);
    }
    public function test()
    {
        $data = [
            "first" => ['first1'=>'1f', "first2"=>'2f', "first3" => '3f', "first4" => '4f'],
            "second" => ['sec1'=>'1s', "sec2"=>'2s', "sec3" => '3s', "sec4" => '4s']
            ];
            Viewer::view("main/test", $data);
    }
    public function error()
    {
        $data = [
            "first" => ['first1'=>'1f', "first2"=>'2f', "first3" => '3f', "first4" => '4f'],
            "second" => ['sec1'=>'1s', "sec2"=>'2s', "sec3" => '3s', "sec4" => '4s']
            ];
            Viewer::view("main/error", $data);
    }
}