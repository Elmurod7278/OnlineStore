<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deliver_orders".
 *
 * @property int $id
 * @property int|null $deliver_id
 * @property int|null $order_id
 * @property string|null $delivered_at
 *
 * @property Delivers $deliver
 * @property Orders $order
 */
class DeliverOrders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deliver_orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deliver_id', 'order_id'], 'default', 'value' => null],
            [['deliver_id', 'order_id'], 'integer'],
            [['delivered_at'], 'safe'],
            [['deliver_id'], 'exist', 'skipOnError' => true, 'targetClass' => Delivers::className(), 'targetAttribute' => ['deliver_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'deliver_id' => Yii::t('app', 'Deliver ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'delivered_at' => Yii::t('app', 'Delivered At'),
        ];
    }

    /**
     * Gets query for [[Deliver]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeliver()
    {
        return $this->hasOne(Delivers::className(), ['id' => 'deliver_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }
}
