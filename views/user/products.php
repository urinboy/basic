<?php

/** @var yii\web\View $this */

$this->title = 'Products';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Products</h1>

        <p class="lead">Foydalanuvchining barcha maxsulotlari</p>

        <p><a class="btn btn-lg btn-success" href="/user">Foydalanuvchi sahifasi</a></p>
    </div>

    <div class="body-content">
            <ul>
                <?php if(!empty($productsList)): ?>
                    <?php foreach($productsList as $product): ?>
                        <li> <?= $product ?> </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
    </div>
</div>
