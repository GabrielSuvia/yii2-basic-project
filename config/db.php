<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic', //host and name of db
    'username' =>getenv('DB_USERNAME'), 
    'password' =>getenv('DB_PASSWORD'),
    'charset' => 'utf8',
];
