<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m181203_130810_create_user_table extends Migration
{
    public function up()
    {

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'counter' => $this->integer()->defaultValue(0),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
