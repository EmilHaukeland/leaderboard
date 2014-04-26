<?php

/**
 * Class BaseDbModel
 *
 * @property string $created
 */
class BaseArModel extends CActiveRecord
{
    public function beforeSave()
    {
        if(!parent::beforeSave())
        {
            return false;
        }

        if($this->isNewRecord)
        {
            $this->created = new CDbExpression('NOW()');
        }

        return true;
    }
} 