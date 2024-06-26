<?php

/** @var yii\web\View $this */
use yii\bootstrap5\Html;

$this->title = Yii::t('app', 'Yangiliklar');
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4"><?= Html::encode($this->title) ?></h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="/admin/news/create">News Create</a></p>
    </div>

    <div class="body-content">

    </div>
</div>
