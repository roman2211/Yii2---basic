<?php

use yii\db\Migration;

/**
 * Class m180520_035228_test
 */
class m180520_035228_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'surname' => $this->string(255)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'access_token' => $this->string(255),
            'auth_key' => $this->string(255),
            'created_at' => $this->integer()->Null(),
            'updated_at' => $this->integer()->Null()

        ]);
        $this->createTable('note', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
            'created_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->Null()


        ]);
        $this->createTable('access', [
            'id' => $this->primaryKey(),
            'note_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull()


        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
        $this->dropTable('note');
        $this->dropTable('access');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180520_035228_test cannot be reverted.\n";

        return false;
    }
    */
}
