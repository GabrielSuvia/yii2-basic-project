<?php
namespace app\repository;

use app\models\User;

class UserRepository
{
    private static $users = [
        1 => ['id' => 1, 'username' => 'usuario1', 'email' => 'usuario1@example.com'],
        2 => ['id' => 2, 'username' => 'usuario2', 'email' => 'usuario2@example.com'],
        
    ];

    public function findAll()
    {   
        $user = self::$users;
        return $user;
    }

    public function createUserRepository($bodyParams)
    {   
        //create user with db
        var_dump($bodyParams);
        error_log("repo:1");
        if (!isset($bodyParams['id'], $bodyParams['name'], $bodyParams['email'], $bodyParams['password'])) {
            throw new \InvalidArgumentException('Parámetros inválidos');
        }

        $user = new User($bodyParams['id'],$bodyParams['name'],$bodyParams['email'],$bodyParams['password']);
        error_log("repo:2");
        return $user;
    }
}
