<?php

class m140425_200119_Application extends CDbMigration
{
    public function up()
    {
        $this->createTable('Application', array(
            'id' => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'userId' => 'INT(11) UNSIGNED NOT NULL',
            'name' => 'VARCHAR(255) NOT NULL',
            'secret' => 'VARCHAR(255) NOT NULL',
            'created' => 'DATETIME NOT NULL',
        ), 'ENGINE InnoDB');

        $this->addForeignKey('ApplicationUserId', 'Application', 'userId', 'User', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('ApplicationUserId', 'Application');
        $this->dropTable('Application');
    }
}