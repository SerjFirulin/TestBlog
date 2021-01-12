<?php

class m210111_175319_create_posts_table extends CDbMigration
{
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
        $this->createTable('posts', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
            'updated_at' => 'datetime',
            'created_at' => 'datetime NOT NULL',
        ));
    }

    public function safeDown()
    {
        $this->dropTable('posts');
    }
}