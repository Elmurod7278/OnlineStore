<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m220801_070623_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'name_uz'=>$this->string(),
            'name_ru'=>$this->string(),
        ]);
        $this->insert('{{%categories}}',[
            'name_uz'=>'Telefonlar va gadjetlar',
            'name_ru'=>'Телефоны и гаджеты'

        ]);
        $this->insert('{{%categories}}',[
            'name_uz'=>'Konditsionerlar',
            'name_ru'=>'Кондиционеры'
        ]);
        $this->insert('{{%categories}}',[
            'name_uz'=>'Maishiy texnika',
            'name_ru'=>'Бытовая техника'
        ]);
        $this->insert('{{%categories}}',[
            'name_uz'=>'Sport va dam olish',
            'name_ru'=>'Спорт и отдых'

        ]);
        $this->insert('{{%categories}}',[
            'name_uz'=>'Idish-tovoqlar',
            'name_ru'=>'Посуда'

        ]);
        $this->insert('{{%categories}}',[
            'name_uz'=>'Kitoblar',
            'name_ru'=>'Книги'

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
}
