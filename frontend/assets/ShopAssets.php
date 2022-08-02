<?php



namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ShopAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/bootstrap.min.css",
        "css/font-awesome.min.css",
        "css/elegant-icons.css",
        "css/nice-select.css",
        "css/jquery-ui.min.css",
        "css/owl.carousel.min.css",
        "css/slicknav.min.css",
        "css/style.css",
    ];
    public $js = [
        "js/bootstrap.min.js",
        "js/jquery-ui.min.js",
        "js/jquery.slicknav.js",
        "js/mixitup.min.js",
        "js/owl.carousel.min.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
