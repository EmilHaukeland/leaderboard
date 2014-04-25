<?php

class m140425_200103_User extends CDbMigration
{
    public function up()
    {
        $this->createTable('User', array(
            'id' => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'created' => 'DATETIME NOT NULL',
        ), 'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable('User');
    }
}