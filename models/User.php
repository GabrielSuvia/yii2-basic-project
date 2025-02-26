<?php
namespace app\models;

//use yii\db\ActiveRecord;// para obtener funcionalidad de la db

class User
{
   
    public $id;
    public $name;
    public $email;
    public $password;
   
    public function __construct($id, $name, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function getAll()
    {
       
        return [new User("1","gabriel","gabo123@hotmail.com","355040")];
    }
}