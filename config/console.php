<?php

return array(
    'basePath' => APP_ROOT,
    'name' => 'Leaderboard',
    'preload' => array('log'),
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=leaderboard',
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
    'commandMap' => array(
        'migrate' => array(
            'class' => 'system.cli.commands.MigrateCommand',
            'migrationTable' => 'Migrations',
        ),
    ),
);