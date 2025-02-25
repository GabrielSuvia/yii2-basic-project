<?php
namespace app\controllers;

use yii\web\Controller;
use app\service\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct($id, $module, UserService $userService, $config = [])
    {
        $this->userService = $userService;
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $users = $this->userService->getAllUsers();
        echo $users;
        return $users;
    }
}
