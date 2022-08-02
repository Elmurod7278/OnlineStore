<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%region}}`.
 */
class m220801_070504_create_region_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%region}}', [
            'id' => $this->primaryKey(),
            'name_uz'=>$this->string(),
            'name_ru'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%region}}');
    }
}
