<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $price
 * @property string|null $brend_uz
 * @property string|null $brend_ru
 * @property string|null $model_uz
 * @property string|null $model_ru
 * @property string|null $status
 * @property string|null $quantity
 * @property string|null $image
 * @property string|null $desc_uz
 * @property string|null $desc_ru
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $category_id
 *
 * @property Categories $category
 * @property OrderProducts[] $orderProducts
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at']
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => date('Y-m-d H:i:s')
            ]];

    }

    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desc_uz', 'desc_ru'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['category_id'], 'default', 'value' => null],
            [['category_id'], 'integer'],
            [['title_uz', 'title_ru', 'price', 'brend_uz', 'brend_ru', 'model_uz', 'model_ru', 'status', 'quantity', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'price' => Yii::t('app', 'Price'),
            'brend_uz' => Yii::t('app', 'Brend Uz'),
            'brend_ru' => Yii::t('app', 'Brend Ru'),
            'model_uz' => Yii::t('app', 'Model Uz'),
            'model_ru' => Yii::t('app', 'Model Ru'),
            'status' => Yii::t('app', 'Status'),
            'quantity' => Yii::t('app', 'Quantity'),
            'image' => Yii::t('app', 'Image'),
            'desc_uz' => Yii::t('app', 'Desc Uz'),
            'desc_ru' => Yii::t('app', 'Desc Ru'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'category_id' => Yii::t('app', 'Category ID'),
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[OrderProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProducts::className(), ['product_id' => 'id']);
    }

    public function upload_file()
    {
        $image = UploadedFile::getInstance($this, 'image');
        $temp_path = Yii::getAlias('@storage/data/') . $image->name;
        $image->saveAs($temp_path);
        $this->image = $image->name;
        return $this->save();
    }

}
