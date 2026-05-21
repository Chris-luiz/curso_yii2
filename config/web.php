<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'meu_segundo_sistema',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        // 'app\bootstrap\ExemploBootstrap'
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@assetsJPG' => '@app/web/assets/imgs/jpg',
        '@controllers' => '@app/controllers',
    ],
    // 'catchAll' => [
    //     'site/offline',
    // ],
    // 'controllerMap' => [
    //     'site' => 'app\controllers\PostController'
    // ],
    // 'controllerNamespace' => 'app\http\controllers',
    'language' => 'pt_BR',
    'sourceLanguage' => 'pt_BR',
    'name' => 'Meu App',
    'timeZone' => 'America/Manaus',
    'version' => '2.0.2',
    'charset' => 'UTF-8',
    'defaultRoute' => 'pessoa',
    'layout' => 'main',
    'layoutPath' => '@app/views/layouts',
    'runtimePath' => '@app/runtime',
    'viewPath' => '@app/views',
    'vendorPath' => '@app/vendor',
    // 'enableCoreCommands' => '',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'hjehe981h9e81298e912h97gf29789ed9712yew978',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {

    $config['bootstrap'][] = 'app\bootstrap\ExemploBootstrap';
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
