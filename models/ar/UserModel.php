<?php

Yii::import('application.models.ar.BaseArModel');

/**
 * Class UserModel
 *
 * @property integer $id
 */
class UserModel extends BaseArModel
{
    public function tableName()
    {
        return 'User';
    }

    public function rules()
    {
        return array(

        );
    }

    /**
     * @param string $className
     * @return UserModel
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
} 