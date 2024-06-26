<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Profil');
$this->params['breadcrumbs'][] = $this->title;

$css = <<<CSS
    .hello-text{
        font-size: 16px;
        font-weight: bold;
        color: red;
    }
CSS;

$this->registerCss($css);
$this->registerCssFile('@web/css/profile.css');

?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4"><?= Html::encode($this->title) ?></h1>

        <p class="lead hello-text"><?= Yii::$app->user->identity->username ?></p>

        <p><a class="btn btn-lg btn-success" href="/"><?= Yii::t('app', 'Bosh sahifa') ?></a></p>
    </div>

<!--    <div class="body-content">-->
<!--        <a href="/user/products" class="btn btn-sm btn-primary">Foydalanuvchi Products</a>-->
<!--    </div>-->
</div>
