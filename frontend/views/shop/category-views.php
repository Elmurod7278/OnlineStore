<section class="featured spad">
    <div class="container">
        <div class="row featured__filter">
            <?php


            foreach ($model

                     as $item) {

                ?>

                <div class="col-lg-3 col-md-4 col-sm-6 mix pt-4"
                     style="border: 1px solid springgreen;border-radius: 7%">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                             data-setbg="<?= "/uploads/storage/data/{$item->image} " ?>">
                            <ul class="featured__item__pic__hover">
                                <li><?php \yii\helpers\Html::a('savat', ['']) ?></li>
                                <li>
                                    <a href="#" onclick="addCart(<?= $item->id ?>)">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="featured__item__text">
                            <h6><a class="text-primary"
                                   href="<?= \yii\helpers\Url::to(['shop/product-details', 'id' => $item->id]) ?>"><?= $item->title_uz ?></a>
                            </h6>
                            <h5><?= number_format($item->price, '0', '', ' ') ?> so'm</h5>
                        </div>
                    </div>
                </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <?php
            }
            ?>
        </div>
    </div>
</section>