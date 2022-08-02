<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `common\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'city_id', 'region_id'], 'integer'],
            [['address', 'extra_desc', 'order_date', 'lng', 'lat', 'status', 'total_number_orders', 'total_price_orders'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Orders::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'city_id' => $this->city_id,
            'region_id' => $this->region_id,
            'order_date' => $this->order_date,
        ]);

        $query->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'extra_desc', $this->extra_desc])
            ->andFilterWhere(['ilike', 'lng', $this->lng])
            ->andFilterWhere(['ilike', 'lat', $this->lat])
            ->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'total_number_orders', $this->total_number_orders])
            ->andFilterWhere(['ilike', 'total_price_orders', $this->total_price_orders]);

        return $dataProvider;
    }
}
