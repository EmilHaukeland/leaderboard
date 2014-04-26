<?php

date_default_timezone_set('Europe/Oslo');
defined('APP_ROOT') or define('APP_ROOT', realpath(__DIR__ . '/..'));

$yii = APP_ROOT . '/components/yii.php';
$config = APP_ROOT . '/config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
require_once(APP_ROOT . '/components/WebApplication.php');
Yii::createApplication('WebApplication', $config)->run();
