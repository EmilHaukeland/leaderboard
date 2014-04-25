<?php

return array(
    'basePath' => APP_ROOT,
    'name' => 'Leaderboard',
    'preload' => array('log'),
    'components' => array(
        'user' => array(
            'allowAutoLogin' => true,
        ),
        'facebook' => array(
            'class' => 'application.components.FacebookComponent',
            'applicationId' => '',
            'secret' => '',
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=leaderboard',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning' . YII_DEBUG ? ' info' : '',
                ),
            ),
        ),
    ),
    'params' => array(),
);