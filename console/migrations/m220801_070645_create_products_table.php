<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m220801_070645_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'title_uz'=>$this->string(),
            'title_ru'=>$this->string(),
            'price'=>$this->string(),
            'brend_uz'=>$this->string(),
            'brend_ru'=>$this->string(),
            'model_uz'=>$this->string(),
            'model_ru'=>$this->string(),
            'status'=>$this->string(),
            'quantity'=>$this->string(),
            'image'=>$this->string(),
            'desc_uz'=>$this->text(),
            'desc_ru'=>$this->text(),
            'created_at'=>$this->timestamp(),
            'updated_at'=>$this->timestamp(),
            'category_id'=>$this->integer()

        ]);
        $this->addForeignKey('fk_category','products','category_id','categories','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
