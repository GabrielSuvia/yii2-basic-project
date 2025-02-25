<?php
namespace app\repository;

use app\models\User;

class UserRepository
{
    public function findAll()
    {
        $user = new User();
        return $user;
    }
}
