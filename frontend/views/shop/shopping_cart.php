<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        use yii\helpers\Url;

                        if ($_COOKIE['example']) {
                            $cookie = json_decode($_COOKIE['example']);
//\yii\helpers\VarDumper::dump($cookie,12,true);die();
                            $products = \common\models\Products::find()->where(['in', 'id', $cookie])->all();
                            foreach ($products as $product) {
                                ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5><?= $product->title_uz ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?= number_format($product->price, 2) ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">

                                            <div class="pro-qty">
                                                <input type="button" id="quantity" value="1">
                                            </div>

                                        </div>
                                    </td>

                                    <td class="shoping__cart__total">
                                        <?= $product->price ?>
                                    </td>

                                    <td class="shoping__cart__item__close">
                                        <!--                                                                                <button onclick="-->
                                        <!--                                        -->
                                        <?php //setcookie("example", "", time() - 300, "/"); ?><!--">bos-->
                                        <!--                                                                                </button>-->
                                    </td>
                                </tr>

                                <?php

                            }
                        } else {
                            ?>
                            }
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/cart/cart-1.jpg" alt="">
                                    <h5>Korzinka bosh</h5>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="#" class="primary-btn cart-btn cart-btn-right">
                        Upadate Cart</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total <span><?php
                                $sum = 0;
                                foreach ($products as $product) {
                                    $sum += intval($product->price);
                                }
                                echo number_format($sum, 2);
                                ?>
                            </span></li>
                    </ul>
                    <a href="<?= url::to(['shop/checkout']) ?>" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    let input = document.getElementById('quantity').value;
    console.log(input)
</script>
<?php

$script = <<<JS

JS;
