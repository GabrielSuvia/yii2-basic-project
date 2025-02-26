<?php
namespace app\repository;

use app\models\User;

class UserRepository
{
    public function findAll()
    {
        $user = User::getAll();
        return $user;
    }
}
