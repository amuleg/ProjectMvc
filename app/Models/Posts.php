<?php

namespace App\Models;

Class Posts 
{
    public function findOne()
    {
        return [
            "id" => 1,
            "authorId" => 1,
            "author" => "author1",
            "title" => "title1",
            "body" => "body1"
        ];
    }
    public function findAll()
    {
        return [
            [
                "id" => 1,
                "authorId" => 1,
                "author" => "author1",
                "title" => "title1",
                "body" => "body1"
            ],
            [
                "id" => 2,
                "authorId" => 2,
                "author" => "author2",
                "title" => "title2",
                "body" => "body2"
            ],
            [   "id" => 3,
            "authorId" => 3,
            "author" => "author3",
            "title" => "title3",
            "body" => "body3"
            ]
        ];
    }
}