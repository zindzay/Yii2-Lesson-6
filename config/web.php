<?php
return [
    'id' => 'app_catalog',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'request' => [
            'cookieValidationKey' => 'your secret key here',
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'view' => [
            'theme' => [
                'class' => yii\base\Theme::className(),
                'basePath' => '@app/themes/snowy',
            ]
        ]
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ]
    ],
    'extensions' => require (__DIR__ . '/../vendor/yiisoft/extensions.php')
];
