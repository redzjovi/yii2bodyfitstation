<?php
return [
    'bootstrap' => ['assetsAutoCompress'],
    'modules' => [
        'gridview' => ['class' => '\kartik\grid\Module'],
    ],
    'language' => 'en',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'assetsAutoCompress' => [
            'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
            'enabled' => true,
            'htmlCompress' => true,
            'htmlCompressOptions' => [
                'extra' => true,
                'no-comments' => true
            ],
        ],
        'authManager' => ['class' => 'yii\rbac\DbManager'],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'basePath' => '@common/messages',
                    'class' => 'yii\i18n\PhpMessageSource',
                    'fileMap' => ['app' => 'app.php'],
                ],
                'kvgrid' => [
                    'basePath' => '@vendor/kartik-v/yii2-grid/messages',
                    'class' => 'yii\i18n\PhpMessageSource',
                    'forceTranslation' => true,
                ],
            ],
        ],
        'Menus' => ['class' => 'common\components\Menus'],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];
