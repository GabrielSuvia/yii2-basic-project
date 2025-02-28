<?php
namespace app\models;

use yii\db\ActiveRecord;// para obtener funcionalidad de la db

class User extends ActiveRecord
{
   
    public static function tableName()
    {
        return 'user'; // Nombre exacto de la tabla en la BD
    }
}