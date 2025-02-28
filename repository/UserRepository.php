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
       error_log("repo:1aaaa");
       if (!isset($bodyParams['name'], $bodyParams['email'], $bodyParams['password'])) {
        error_log("repo:1");
        throw new \InvalidArgumentException('Parámetros inválidos');
        }
        
        $user = new User();
        $user->name = $bodyParams['name'];
        $user->name = $bodyParams['email'];
        $user->name = $bodyParams['password'];

        return $user->save()? $user : null;
    }
}


/*

*/