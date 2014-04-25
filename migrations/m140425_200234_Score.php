<?php

class m140425_200234_Score extends CDbMigration
{
    public function up()
    {
        $this->createTable('Score', array(
            'id' => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'applicationId' => 'INT(11) UNSIGNED NOT NULL',
            'score' => 'INT(100) NOT NULL',
            'created' => 'DATETIME NOT NULL',
            'nick' => 'VARCHAR(100) NOT NULL',
        ), 'ENGINE InnoDB');

        $this->addForeignKey('ScoreApplicationId', 'Score', 'applicationId', 'Application', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('ScoreApplicationId', 'Score');
        $this->dropTable('Score');
    }
}