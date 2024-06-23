<?php

/** @var yii\web\View $this */

$this->title = 'News View';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">View <?= $saytAdmin ?></h1>

        <p class="lead">ID:  <?= $id ?>, Category: <?= $category ?> </p>

        <p><a class="btn btn-lg btn-success" href="/admin/news">Orqaga qaytishs</a></p>
    </div>

    <div class="body-content">
        <?php debug(Yii::$app); ?>
    </div>
</div>
