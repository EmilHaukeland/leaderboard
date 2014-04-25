<?php

require(APP_ROOT . '/vendor/yiisoft/yii/framework/YiiBase.php');

class Yii extends YiiBase
{
    /**
     * @return WebApplication
     */
    public static function app()
    {
        return parent::app();
    }
}