<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%delivers}}`.
 */
class m220801_070810_create_delivers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%delivers}}', [
            'id' => $this->primaryKey(),
            'phone'=>$this->string(),
            'FISH'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%delivers}}');
    }
}
