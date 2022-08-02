<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m220801_070717_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'customer_id'=>$this->integer(),
            'city_id'=>$this->integer(),
            'region_id'=>$this->integer(),
            'address'=>$this->text(),
            'extra_desc'=>$this->text(),
            'order_date'=>$this->timestamp(),
            'lng'=>$this->string(),
            'lat'=>$this->string(),
            'status'=>$this->string(),
            'total_number_orders'=>$this->string(),
            'total_price_orders'=>$this->string()
        ]);
        $this->addForeignKey('fk_customer_id','orders','customer_id','customer','id','CASCADE');
        $this->addForeignKey('fk_city_id','orders','city_id','city','id','CASCADE');
        $this->addForeignKey('fk_region_id','orders','region_id','region','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
