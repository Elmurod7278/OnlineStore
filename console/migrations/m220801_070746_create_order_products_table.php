<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_products}}`.
 */
class m220801_070746_create_order_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_products}}', [
            'id' => $this->primaryKey(),
            'order_id'=>$this->integer(),
            'product_id'=>$this->integer(),
            'product_count'=>$this->string(),
            'price'=>$this->string()
        ]);
        $this->addForeignKey('fk_order_id','order_products','order_id','orders','id','CASCADE');
        $this->addForeignKey('fk_product_id','order_products','product_id','products','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_products}}');
    }
}
