<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/vendor/fonts/boxicons.css',
        'assets/vendor/css/core.css',
        'assets/vendor/css/theme-default.css',
        'assets/css/demo.css',
        'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css',
        'assets/vendor/libs/apex-charts/apex-charts.css',
    ];
    public $js = [
        'assets/vendor/js/helpers.js',
        'assets/js/config.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
