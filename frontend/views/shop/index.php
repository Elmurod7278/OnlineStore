<?php use common\models\Products;
use yii\helpers\Json; ?>
    <!-- Categories Section Begin -->
    <section class="categories">

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">

            <div class="row featured__filter">
                <?php

                $products = Products::find()->orderBy('created_at  DESC')->all();
                foreach ($products

                         as $product) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 mix pt-4"
                         style="border: 1px solid springgreen;border-radius: 7%">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg"
                                 data-setbg="<?= "/uploads/storage/data/{$product->image} " ?>">
                                <ul class="featured__item__pic__hover">
                                    <li><?php \yii\helpers\Html::a('savat', ['']) ?></li>
                                    <li>
                                        <input type="text" class="product-quantity" name="quantity" value="1" size="2"
                                               id="quantity<?= $product->id ?>"/>
                                        <input type="submit" value="Add to Cart" class="add-to-cart"
                                               onClick="addToCart(<?= $product->id ?>)"/>

                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="featured__item__text">
                                <h6><a class="text-primary"
                                       href="<?= \yii\helpers\Url::to(['shop/product-details', 'id' => $product->id]) ?>"><?= $product->title_uz ?></a>
                                </h6>
                                <h5><?= number_format($product->price, '0', '', ' ') ?> so'm</h5>
                            </div>
                        </div>
                    </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->


    <script>

        // function addCart(id) {
        //     let first = [];
        //
        //     if (Cookies.get('example')) {
        //         first = JSON.parse(Cookies.get('example'))
        //         first.push(id)
        //     } else {
        //         first.push(id)
        //     }
        //     Cookies.set('example', JSON.stringify(first), {expires: 7})
        // }


        //$(document).ready(function () {
        //    var productItem = [
        //        <?php //$products = Products::find()->all();
        //        foreach ($products as $product){
        //
        //        ?>
        //        {
        //            productName:'<?//= $product->name_uz ?>//',
        //            price:'<?//= $product->price ?>//',
        //            photo:'<?//= $product->name_uz ?>//',
        //        },
        //        <?php
        //        }
        //        ?>
        //        ]
        //})
    </script>


    <script>
        function addToCart(id) {
            var quantity = $('#quantity' + id).val()
            $.ajax('/shop/get-product', {
                type: 'GET',  // http method
                data: {id: id},  // data to submit
                success: function (data, status, xhr) {
                    var cartArray = new Array();
                    // If javascript shopping cart session is not empty
                    if (Cookies.get('cart')) {
                        cartArray = JSON.parse(Cookies.get('cart'));
                    }
                    data = JSON.parse(data);
                    data['quantity'] = quantity
                    cartArray.push(data);

                    var cartJSON = JSON.stringify(cartArray);
                    Cookies.remove('cart')
                    Cookies.set('cart', cartJSON);
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage)
                }
            });
        }
    </script>



<?php //\yii\helpers\VarDumper::dump($_COOKIE['example'],12,true);die(); ?>