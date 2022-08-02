<?php use common\models\Products; ?>
    <!-- Categories Section Begin -->
    <section class="categories">

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">

            <div class="row featured__filter">
                <?php

                $products = Products::find()->all()->orderBy(['rand()']);
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
                                        <a href="#" onclick="addCart(<?= $product->id ?>)">
                                            <i class="fa fa-shopping-cart"></i>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"
            integrity="sha256-0H3Nuz3aug3afVbUlsu12Puxva3CP4EhJtPExqs54Vg=" crossorigin="anonymous"></script>
    <script>
        //
        //    function addCart(id) {
        //        let first = []
        //        if (Cookies.get('example')){
        //            first = Cookies.get('example')
        //            first.push(id)
        //        }else{
        //            first.push(id)
        //        }
        //        Cookies.set('example', first, { expires: 7})
        //    }


        function addCart(id) {
            let first = [];

            if (Cookies.get('example')) {
                first = JSON.parse(Cookies.get('example'))
                first.push(id)
            } else {
                first.push(id)
            }
            Cookies.set('example', JSON.stringify(first), {expires: 7})
        }

    </script>



<?php //\yii\helpers\VarDumper::dump($_COOKIE['example'],12,true);die(); ?>