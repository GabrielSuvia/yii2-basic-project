<?php
namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Response;
use app\service\UserService;

class UserController extends ActiveController
{
    private $userService;

    public function __construct($id, $module, UserService $userService, $config = [])
    {
        $this->userService = $userService;
        parent::__construct($id, $module, $config);
    }


     // Esta función maneja los comportamientos como la respuesta JSON y autenticación
     public function behaviors()
     {
         $behaviors = parent::behaviors();
 
         // Configuración de CORS, si deseas permitir solicitudes de diferentes dominios
         $behaviors['corsFilter'] = [
             'class' => \yii\filters\Cors::class,
         ];
 
         // Autenticación usando el esquema Bearer Token
         $behaviors['authenticator'] = [
             'class' => HttpBearerAuth::class,
         ];
 
         // Comportamiento para que las respuestas sean siempre en formato JSON
         $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
         
         return $behaviors;
     }
 

    public function actionGetAllUsers()
    {
        $users = $this->userService->getAllUsers();
        return [
            'status'=> 'succes',
            'body' => $users
        ];
    }
}
