<?php

use common\models\City;
use common\models\Products;
use common\models\Region;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;


?>

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <?= /** @var \common\models\Orders $model */
                                $form->field($model, 'fish')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <?= $form->field($model, 'phone')->widget(MaskedInput::className(), ['class' => 'form-control', 'mask' => '+999(99) 999-99-99'])->label(Yii::t('app', 'Телефон') . ' <span class="text-danger">*</span>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'name_uz'), ['id' => 'region_id']); ?>
                        </div>
                        <div class="col-lg-6">
                            <?= $form->field($model, 'city_id')->widget(Select2::classname(), [
                                'data' => \yii\helpers\ArrayHelper::map(\common\models\City::find()->all(),'id','name_uz'),
                                'options' => ['placeholder' => 'Select a state ...'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]); ?>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="checkout__input">
                        <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
                    </div>
                    <div class="checkout__input">
                        <?= $form->field($model, 'extra_desc')->textarea(['rows' => 6]) ?>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="checkout__order">
                        <h4>Your Order</h4>
                        <div class="checkout__order__products">Products <span>Total</span></div>
                        <ul><?php if ($_COOKIE['cart']) {
                                $cookie = json_decode($_COOKIE['cart']);
                                $products = Products::find()->where(['in', 'id', ArrayHelper::map($cookie, 'id', 'id')])->all();
                                foreach ($products as $product) {
                                    ?>
                                    <li><a style="font-size: 15px;color: blue" href="<?=\yii\helpers\Url::to(['shop/product-details','id'=>$product->id])?>"><?= $product->title_uz ?></a><span><?= number_format($product->price,0,' ',' ').' so\'m' ?></span></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                        <div class="checkout__order__total">Total <span><?php
                                $sum = 0;
                                foreach ($products as $product) {
                                    $sum += intval($product->price);
                                }
                                echo number_format($sum, 0,' ',' ').' so\'m';
                                ?></span></div>
                        <div class="checkout__input__checkbox">
                            <label for="acc-or">
                                Create an account?
                                <input type="checkbox" id="acc-or">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                        <div class="checkout__input__checkbox">
                            <label for="payment">
                                Check Payment
                                <input type="checkbox" id="payment">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="paypal">
                                Paypal
                                <input type="checkbox" id="paypal">
                                <span class="checkmark"></span>
                            </label>
                        </div>
<!--                        <button>tugma</button>-->
                    </div>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>

<script>


    function placeMarkToRegion(regionId) {
        $.ajax({
            data: {id: regionId},
            type: 'GET',
        }
    }

    )
    }

    function placeMarkToCity(cityId) {
        $.ajax({
            data: {id: cityId},
            type: 'GET',

        })
    }
</script>
