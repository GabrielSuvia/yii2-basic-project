<?php
namespace app\controllers;

//use yii\rest\ActiveController;
use yii\web\Response;
use \yii\web\Controller;
use app\service\UserService;
use app\models\User;

class UserController extends Controller
{
   //public $modelClass = 'app\models\User'; 
  //  private $userService;

   // public function __construct($id, $module, UserService $userService, $config = [])
   // {
     //   $this->userService = $userService;
      //  parent::__construct($id, $module, $config);
   // }


    public function actionGetAllUsers()
    {
        $users = User::getAll();
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return $users;
    }
}
