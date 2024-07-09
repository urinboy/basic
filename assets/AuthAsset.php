<?php

namespace app\assets;

use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
          "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback",
          "dist/plugins/fontawesome-free/css/all.min.css",
          "dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
          "dist/css/adminlte.min.css",
    ];
    public $js = [
        "dist/plugins/jquery/jquery.min.js",
        "dist/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "dist/js/adminlte.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset'
    ];
}