<?php

use yii\db\Migration;

class m160706_173559_mainSlider extends Migration
{
    public function up() {

        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('slider', [
            'id' => "INT(16)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
            'title' => "VARCHAR(255)  NOT NULL",
            'text' => "LONGTEXT  NOT NULL",
                ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('slider');
        return true;
    }

}
