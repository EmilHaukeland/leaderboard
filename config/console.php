<?php

return array(
    'basePath' => APP_ROOT,
    'name' => 'Leaderboard',
    'preload' => array('log'),
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=testdrive',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning'
                ),
            ),
        ),
    ),
);