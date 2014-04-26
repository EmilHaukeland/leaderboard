<?php

Yii::import('application.models.ar.BaseArModel');

/**
 * Class ScoreModel
 *
 * @property integer $id
 * @property integer $applicationId
 * @property integer $score
 * @property string $nick
 */
class ScoreModel extends BaseArModel
{
    public function tableName()
    {
        return 'Score';
    }

    public function rules()
    {
        return array(
            array('applicationId, score, nick', 'required'),
            array('applicationId, score', 'numerical', 'integerOnly' => true),
            array('nick', 'match', 'pattern' => '/^[a-zA-Z0-9\!\#\$\%\&\?\+\*\@\_\-\.]+$/'),
            array('nick', 'length', 'min' => 1, 'max' => 100),
            array('nick', 'applicationUniqueValidator'),
        );
    }

    public function relations()
    {
        return array(
            'application' => array(self::BELONGS_TO, 'Application', 'applicationId'),
        );
    }

    public function applicationUniqueValidator($attribute, $params)
    {
        if(!$this->isNewRecord)
        {
            return;
        }

        $nickOccupied = static::model()->exists('applicationId = :applicationId AND nick = :nick', array(
            ':applicationId' => $this->applicationId,
            ':nick' => $this->nick)
        );

        if($nickOccupied)
        {
            $this->addError($attribute, Yii::t('app', 'Nick taken'));
        }
    }

    /**
     * @param string $className
     * @return ScoreModel
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
} 