<?php

use yii\db\Schema;
use yii\db\Migration;

class m160601_071713_create_clients extends Migration {

    public function up() {

        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('clients', [
            'id' => "MEDIUMINT(8)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
            'title' => "VARCHAR(255)  NOT NULL",
            'photo' => "VARCHAR(255)  NOT NULL",
        ], $tableOptions);
    }

    public function down() {
        $this->dropTable('clients');
        return true;
    }

}
