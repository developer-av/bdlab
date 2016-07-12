<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'Лаборатория развития бизнеса',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
                'about' => 'about/default/index',
                'services' => 'site/services',
                'services/<id:\d+>' => 'site/service-inner',
                'clients' => 'clients/default/index',
                'blog' => 'blog/default/index',
                'blog/<id:\d+>' => 'blog/default/view',
                'contact' => 'about/default/contact',
            ],
        ],
    ],
    'modules' => [
        'about' => [
            'class' => 'common\modules\about\frontend\Module',
        ],
        'clients' => [
            'class' => 'common\modules\clients\frontend\Module',
        ],
        'blog' => [
            'class' => 'developerav\blog\frontend\Module',
            'viewPath' => '@app/views/blog',
            'pageSize' => 6,
        ]
    ],
    'params' => $params,
];
