<?php
/**
 * Created by PhpStorm.
 * User: Lord
 * Date: 19.06.2019
 * Time: 16:15
 */

namespace app\assets;


use yii\web\AssetBundle;

class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'themeadmin/assets/vendor/nucleo/css/nucleo.css',
        'themeadmin/assets/vendor/font-awesome/css/font-awesome.min.css',
        'themeadmin/assets/css/argon.css?v=1.0.1',
        'themeadmin/assets/css/docs.min.css',
    ];
    public $js = [
        'themeadmin/assets/vendor/jquery/jquery.min.js',
        'themeadmin/assets/vendor/popper/popper.min.js',
        'themeadmin/assets/vendor/bootstrap/bootstrap.min.js',
        'themeadmin/assets/vendor/headroom/headroom.min.js',
        'themeadmin/assets/vendor/onscreen/onscreen.min.js',
        'themeadmin/assets/vendor/nouislider/js/nouislider.min.js',
        'themeadmin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
        'themeadmin/assets/js/argon.js?v=1.0.1',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}