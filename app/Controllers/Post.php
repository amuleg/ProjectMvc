<?php

namespace App\Controllers;

use App\Core\Viewer;
use App\Models\Posts;
use App\Orm\Connect;

class Post
{
    public function index()
    {
//         $data["data"] = (new Posts) -> findAll();
//             Viewer::view("post/index", $data);
         var_dump((new Connect)->getConnect());
    }
    public function test()
    {
        $data["data"] = (new Posts) -> findOne();
            Viewer::view("post/test", $data);
    }
    public function error()
    {
        $data["data"] = (new Posts) -> findOne();
            Viewer::view("post/error", $data);
    }
}