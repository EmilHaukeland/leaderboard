<?php

Yii::import('application.models.ar.BaseArModel');

/**
 * Class FacebookUserModel
 *
 * @property integer $facebookId
 * @property integer $userId
 */
class FacebookUserModel extends BaseArModel
{
    public function tableName()
    {
        return 'FacebookUser';
    }

    public function rules()
    {
        return array(
            array('facebookId, userId', 'required'),
        );
    }

    public function relations()
    {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'userId'),
        );
    }

    /**
     * @param string $className
     * @return FacebookUserModel
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
} 