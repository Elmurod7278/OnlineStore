<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `common\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id'], 'integer'],
            [['title_uz', 'title_ru', 'price', 'brend_uz', 'brend_ru', 'model_uz', 'model_ru', 'status', 'quantity', 'image', 'desc_uz', 'desc_ru', 'created_at', 'updated_at'], 'safe'],
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
        $query = Products::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['ilike', 'title_uz', $this->title_uz])
            ->andFilterWhere(['ilike', 'title_ru', $this->title_ru])
            ->andFilterWhere(['ilike', 'price', $this->price])
            ->andFilterWhere(['ilike', 'brend_uz', $this->brend_uz])
            ->andFilterWhere(['ilike', 'brend_ru', $this->brend_ru])
            ->andFilterWhere(['ilike', 'model_uz', $this->model_uz])
            ->andFilterWhere(['ilike', 'model_ru', $this->model_ru])
            ->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'quantity', $this->quantity])
            ->andFilterWhere(['ilike', 'image', $this->image])
            ->andFilterWhere(['ilike', 'desc_uz', $this->desc_uz])
            ->andFilterWhere(['ilike', 'desc_ru', $this->desc_ru]);

        return $dataProvider;
    }
}
