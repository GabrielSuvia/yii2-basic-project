<?php
namespace app\service;

use app\repository\UserRepository;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->findAll();
    }

    public function createUserService($bodyParams)
    {   var_dump($bodyParams);
        return $this->userRepository->createUserRepository($bodyParams);
    }
}
