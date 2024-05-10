<?php

namespace App;

class UserFactory
{
    public static function create(int $id, string $name){
        return new User($id, $name);
    }
}