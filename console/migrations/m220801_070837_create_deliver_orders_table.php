<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%deliver_orders}}`.
 */
class m220801_070837_create_deliver_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%deliver_orders}}', [
            'id' => $this->primaryKey(),
            'deliver_id'=>$this->integer(),
            'order_id'=>$this->integer()->defaultValue(null),
            'delivered_at'=>$this->timestamp()
        ]);
        $this->addForeignKey('fk_deliver_id','deliver_orders','deliver_id','delivers','id','CASCADE');
        $this->addForeignKey('fk_order_id','deliver_orders','order_id','orders','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%deliver_orders}}');
    }
}
