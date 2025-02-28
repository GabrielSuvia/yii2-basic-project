<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config =[
    'id' => 'backend-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'db' => $db,
        'user' => [//tableName
        'class' => 'yii\web\User',
        'identityClass' => 'app\models\User', // Asegúrate de que este sea el namespace correcto para tu modelo de usuario
        'enableSession' => false, // Si no estás utilizando sesiones
    ],
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
                
            ],
            'cookieValidationKey' => '1234567890qwertyuiopasdfghjklzxcvbnm',
        ],
        'response' => [
            'format' => yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'user' => 'user/get-all-users',
                'user/create' => 'user/create-user'
            ],
        ],
    ],
    
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
