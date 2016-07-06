<?php

use yii\db\Migration;

class m160705_065423_services extends Migration {

    public function up() {

        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('services', [
            'id' => "INT(16)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
            'title' => "VARCHAR(255)  NOT NULL",
            'photo' => "VARCHAR(255)  NOT NULL",
            'text' => "LONGTEXT  NOT NULL",
                ], $tableOptions);

        $this->createTable('services_property', [
            'id' => "INT(16)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
            'services_id' => "INT(16)  NOT NULL",
            'sort_order' => "INT(16)  NOT NULL",
            'text' => "VARCHAR(255)  NOT NULL",
                ], $tableOptions);
    }

    public function down() {
        $this->dropTable('services');
        $this->dropTable('services_property');
        return true;
    }

}
