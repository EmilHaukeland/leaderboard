<?php

Yii::import('application.models.ar.BaseArModel');

/**
 * Class ApplicationModel
 *
 * @property integer $id
 * @property integer $userId
 * @property string $name
 * @property string $secret
 */
class ApplicationModel extends BaseArModel
{
    public function tableName()
    {
        return 'Application';
    }

    public function rules()
    {
        return array(
            array('userId', 'required'),
        );
    }

    public function relations()
    {
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'userId'),
            'scores' => array(self::HAS_MANY, 'Score', 'applicationId'),
        );
    }

    /**
     * @param string $className
     * @return ApplicationModel
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
} 