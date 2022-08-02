<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_uz',

            'title_ru',
            'price',
            'brend_uz',
            'brend_ru',
            'model_uz',
            'model_ru',
            'status',
            'quantity',
            [
                'attribute' => 'image',
                'value' => function ($model) {
                    return Html::a('image', ['/uploads/storage/data/' . $model->image]);
                },
                'format' => 'raw'
            ],
            'desc_uz:ntext',
            'desc_ru:ntext',
            'created_at:datetime',
            'updated_at:datetime',
            [
                'attribute' => 'category_id',
                'value' =>function($model){
                    return $model->category->name_uz;
                }
            ],
        ],
    ]) ?>

</div>
