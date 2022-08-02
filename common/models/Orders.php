<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int|null $customer_id
 * @property int|null $city_id
 * @property int|null $region_id
 * @property string|null $address
 * @property string|null $extra_desc
 * @property string|null $order_date
 * @property string|null $lng
 * @property string|null $lat
 * @property string|null $status
 * @property string|null $total_number_orders
 * @property string|null $total_price_orders
 *
 * @property City $city
 * @property Customer $customer
 * @property DeliverOrders[] $deliverOrders
 * @property OrderProducts[] $orderProducts
 * @property Region $region
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'city_id', 'region_id'], 'default', 'value' => null],
            [['customer_id', 'city_id', 'region_id'], 'integer'],
            [['address', 'extra_desc'], 'string'],
            [['order_date'], 'safe'],
            [['phone'], 'match', 'pattern' => '/^(?:\+[9]{2}[8]\([0-9]{2}\) [0-9]{3}-[0-9]{2}-[0-9]{2})$/'],
            [['lng', 'lat', 'status', 'total_number_orders', 'total_price_orders'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'region_id' => Yii::t('app', 'Region ID'),
            'address' => Yii::t('app', 'Address'),
            'extra_desc' => Yii::t('app', 'Extra Desc'),
            'order_date' => Yii::t('app', 'Order Date'),
            'lng' => Yii::t('app', 'Lng'),
            'lat' => Yii::t('app', 'Lat'),
            'status' => Yii::t('app', 'Status'),
            'total_number_orders' => Yii::t('app', 'Total Number Orders'),
            'total_price_orders' => Yii::t('app', 'Total Price Orders'),
        ];
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[DeliverOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeliverOrders()
    {
        return $this->hasMany(DeliverOrders::className(), ['order_id' => 'id']);
    }

    /**
     * Gets query for [[OrderProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProducts::className(), ['order_id' => 'id']);
    }

    /**
     * Gets query for [[Region]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }



}
