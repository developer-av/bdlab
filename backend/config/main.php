<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'authTimeout' => 10 * 60, // 10 минут
            'enableSession' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['Guest'],
        ]
    ],
    'modules' => [
        'feedback' => [
            'class' => 'developerav\comments\Module',
        ],
        'clients' => [
            'class' => 'common\modules\clients\backend\Module',
        ],
        'about' => [
            'class' => 'common\modules\about\backend\Module',
        ],
        'blog' => [
            'class' => 'developerav\blog\backend\Module',
        ],
        'users' => [
            'class' => 'mdm\admin\Module',
        ]
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'disabledCommands' => [
                'netmount',
            ],
            'root' => [
                'baseUrl' => '@web',
                'basePath' => '@webroot',
                'path' => 'upload/files',
                'name' => '/'
            ],
        ]
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
    ],
    'params' => $params,
];
