<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%orders}}`.
 */
class m220801_175600_add_new_column_to_orders_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('orders', 'phone', $this->string());
        $this->addColumn('orders', 'fish', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('orders','phone');
        $this->dropColumn('orders','fish');
    }
}
