<?php

use yii\db\Schema;
use yii\db\Migration;

class m150925_013927_table_offer extends Migration
{
    public function up()
    {
    	$this->createTable('offer', [
    			'id' => Schema::TYPE_PK,
    			'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'start_date' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'end_date' => Schema::TYPE_INTEGER . ' NOT NULL',
    			'start_city' => Schema::TYPE_TEXT . ' NOT NULL',
    			'end_city' => Schema::TYPE_TEXT . ' NOT NULL',
    			'latitude_start' => Schema::TYPE_TEXT,
    			'longitude_start' => Schema::TYPE_TEXT,
    			'latitude_start' => Schema::TYPE_TEXT,
    			'longitude_start' => Schema::TYPE_TEXT,
    			'description' => Schema::TYPE_TEXT,
    			'contact_info' => Schema::TYPE_TEXT. ' NOT NULL',
    			'active' => Schema::TYPE_BOOLEAN,
    			'created_date' => Schema::TYPE_INTEGER,
    			'modified_date' => Schema::TYPE_INTEGER,

    			]);
    	
    	$this->addForeignKey('FK01_offer_user', 'offer', 'user_id', 'user', 'id');
    	

    }

    public function down()
    {
    	$this->dropTable("offer");

        return true;	
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
