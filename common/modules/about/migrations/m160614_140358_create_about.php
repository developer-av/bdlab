<?php

use yii\db\Migration;

class m160614_140358_create_about extends Migration
{
	public function up(){

        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		$this->createTable('about', [
			'id' => "SMALLINT(8)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
			'name' => "VARCHAR(255)  NOT NULL",
			'photo' => "VARCHAR(255)  NOT NULL",
			'about' => "LONGTEXT  NOT NULL",
			'email' => "VARCHAR(255)  NOT NULL",
			'phone' => "VARCHAR(255)  NOT NULL",
			'vk' => "VARCHAR(255)  NOT NULL",
			'instagram' => "VARCHAR(255)",
			'facebook' => "VARCHAR(255)  NOT NULL",
		], $tableOptions);
	}
	public function down(){
		$this->dropTable('about');
		return true;
	}
}