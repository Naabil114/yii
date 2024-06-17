<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'assets/vendor/bootstrap/css/bootstrap.min.css',
        'assets/assets/css/fontawesome.css',
        'assets/assets/css/templatemo-scholar.css',
        'assets/assets/css/owl.css',
        'assets/assets/css/animate.css',
        'https://unpkg.com/swiper@7/swiper-bundle.min.css',
    ];
    public $js = [
        'assets/vendor/jquery/jquery.min.js',
        'assets/vendor/bootstrap/js/bootstrap.min.js',
        'assets/assets/js/isotope.min.js',
        'assets/assets/js/owl-carousel.js',
        'assets/assets/js/counter.js',
        'assets/assets/js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
