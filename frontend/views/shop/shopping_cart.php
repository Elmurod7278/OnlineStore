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
                            <th>taxrirlash</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        use common\models\Products;
                        use yii\helpers\ArrayHelper;
                        use yii\helpers\Json;
                        use yii\helpers\Url;

                        if ($_COOKIE['cart']) {
                            $cookie = json_decode($_COOKIE['cart']);
                            $products = Products::find()->where(['in', 'id', ArrayHelper::map($cookie, 'id', 'id')])->all();
                            foreach ($products as $product) {
                                ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?= "/uploads/storage/data/{$product->image} " ?>"
                                             style="width: 100px">
                                        <h5><?= $product->title_uz ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?= number_format($product->price, 2) ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <?php
                                            $count = 0;
                                            foreach ($cookie as $item) {
                                                if ($item->id == $product->id)
                                                    $count += $item->quantity;
                                            }
                                            ?>
                                            <?= $count ?>
                                        </div>
                                    </td>

                                    <td class="shoping__cart__total">
                                        <?= number_format($product->price * $count) ?>
                                    </td>

                                    <td class="shoping__cart__item__close">
                                        <button class="btn btn-primary" onclick="deleteFromCart(<?= $product->id ?>)">
                                            delete
                                        </button>
                                    </td>
                                </tr>

                                <?php

                            }
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
                        <li>Total <span>
                                <?php
                                $sum = 0;
                                foreach ($products as $product) {
                                    $sum += intval($product->price);
                                }
                                echo number_format($sum, 0, ' ', ' ') . ' so\'m';
                                ?>
                            </span>
                        </li>
                    </ul>
                    <a href="<?= url::to(['shop/checkout']) ?>" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function deleteFromCart(id) {
        var cartArray = new Array();
        var oldData = Cookies.get('cart');
        if (oldData) {
            JSON.parse(oldData).forEach(function (item) {
                if (item.id !== id) {
                    cartArray.push(item)
                }
            })

            var cartJSON = JSON.stringify(cartArray);
            Cookies.remove('cart');
            Cookies.set('cart', cartJSON);

            window.location.href = '/shop/shopping-cart'
        }
    }
</script>
<?php

$script = <<<JS

JS;
