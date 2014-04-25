<?php

class m140425_205008_FacebookUser extends CDbMigration
{
    public function up()
    {
        $this->createTable('FacebookUser', array(
            'facebookId' => 'INT(100) NOT NULL PRIMARY KEY',
            'userId' => 'INT(11) UNSIGNED NOT NULL',
            'created' => 'DATETIME',
        ), 'ENGINE InnoDB');

        $this->addForeignKey('FacebookUserId', 'FacebookUser', 'userId', 'User', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('FacebookUserId', 'FacebookUser');
        $this->dropTable('FacebookUser');
    }
}