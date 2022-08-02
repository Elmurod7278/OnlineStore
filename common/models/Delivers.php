<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "delivers".
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $FISH
 *
 * @property DeliverOrders[] $deliverOrders
 */
class Delivers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'delivers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'FISH'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'phone' => Yii::t('app', 'Phone'),
            'FISH' => Yii::t('app', 'Fish'),
        ];
    }

    /**
     * Gets query for [[DeliverOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeliverOrders()
    {
        return $this->hasMany(DeliverOrders::className(), ['deliver_id' => 'id']);
    }
}
