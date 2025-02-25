<?php
namespace app\models;

//use yii\db\ActiveRecord;// para obtener funcionalidad de la db

class User
{
    //usuario harcodeado
    private static $users = [
        1 => ['id' => 1, 'username' => 'usuario1', 'email' => 'usuario1@example.com'],
        2 => ['id' => 2, 'username' => 'usuario2', 'email' => 'usuario2@example.com'],
        
    ];
    public static function getAll()
    {
        echo "Ejecutando User Model";
        return self::$users;
    }
}