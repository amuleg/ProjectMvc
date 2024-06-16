<?php

namespace App\Models;

Class Users
{
    public function findOne()
    {
        return [
            "id" => 1,
            "Login" => "login1",
            "password" => "password1",
            "email" => "email1",
            "firstName" => "firstname1",
            "secondName" => "secondname1",
        ];
    }
    public function findAll()
    {
        return [
            [
                "id" => 1,
            "Login" => "login1",
            "password" => "password1",
            "email" => "email1",
            "firstName" => "firstname1",
            "secondName" => "secondname1",
            ],
            [
                "id" => 2,
            "Login" => "login2",
            "password" => "password2",
            "email" => "email2",
            "firstName" => "firstname2",
            "secondName" => "secondname2",
            ],
            [   
                "id" => 3,
                "Login" => "login3",
                "password" => "password3",
                "email" => "email3",
                "firstName" => "firstname3",
                "secondName" => "secondname3",
            ]
        ];
    }
}