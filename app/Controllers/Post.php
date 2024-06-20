<?php

namespace App\Controllers;

use App\Core\Viewer;
use App\Models\Posts;
class Post
{
    public function index()
    {
        $data["data"] = (new Posts) -> findAll();
        Viewer::view("post/index", $data);

        $data["data"] = (new Posts) -> findLimitFromOffset(2, 4);
        Viewer::view("post/index", $data);
        $data["data"] = (new Posts) -> findOrderBy("author_id");
        Viewer::view("post/index", $data);
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