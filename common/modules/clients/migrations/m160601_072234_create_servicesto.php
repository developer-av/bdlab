<?php

use yii\db\Schema;
use yii\db\Migration;

class m160601_072234_create_servicesto extends Migration
{
	public function up(){

        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		$this->createTable('servicesto', [
			'id' => "MEDIUMINT(8)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
			'client_id' => "MEDIUMINT(8)  NOT NULL",
			'text' => "VARCHAR(255)  NOT NULL",
			'sort_order' => "SMALLINT(1)  NOT NULL",
		], $tableOptions);
		$this->createIndex('index_client_id_sort-order', 'servicesto', ['client_id', 'sort_order']);
	}
	public function down(){
		$this->dropTable('servicesto');
		return true;
	}
}