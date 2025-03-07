<?php
namespace app\controllers;

//use yii\rest\ActiveController;
//use yii\web\Response;
use Yii;
use yii\web\Controller;
use app\service\UserService;
use app\models\User;
//use yii\web\Request;

class UserController extends Controller
{
   public $enableCsrfValidation = false;//security desactived
    private $userService;

   public function __construct($id, $module, UserService $userService, $config = [])
    {
        $this->userService = $userService;
        parent::__construct($id, $module, $config);
    }

    public function actionGetAllUsers()
    {
        $userString = $this->userService->getAllUsers();

        return $userString;
    }

    public function actionCreateUser()
    {
        $request = Yii::$app->request;

        $bodyParams = $request->bodyParams;
       // if(!$bodyParams){
        //    error_log("3.1");
        //  return ['error'=> 'data undefined'];
       // }
       // error_log("4");
       
        $userString = $this->userService->createUserService($bodyParams);

        return $userString;
    }
}
