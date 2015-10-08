<?php

use yii\db\Schema;
use yii\db\Migration;

class m150930_001551_rolecolumn extends Migration
{
    public function up()
    {
    	$this->addColumn("user", "role", Schema::TYPE_INTEGER);

    }

    public function down()
    {
       	$this->dropColumn("user", "role");

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
