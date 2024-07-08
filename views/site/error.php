<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<div class="site-error text-center">

    <h1 class="display-1"><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger mt-4">
        <h2>Oops! Page not found.</h2>
        <p><?= nl2br(Html::encode($message)) ?></p>
    </div>

    <p class="lead">
        <?= Yii::t('app', "Yuqoridagi xato veb-server sizning so'rovingizni ko'rib chiqayotganda sodir bo'ldi.") ?>
    </p>

    <div class="mt-4">
        <a href="<?= Url::home() ?>" class="btn btn-primary btn-lg">Go to Home</a>
        <a href="javascript:history.back()" class="btn btn-secondary btn-lg">Go Back</a>
    </div>

    <div class="mt-5">
        <p><?= Yii::t('app', "Agar bu server xatoligi deb o'ylasangiz, biz bilan bog'laning. Rahmat.") ?></p>
        <p><a href="mailto:support@example.com">support@example.com</a></p>
    </div>

</div>

<style>
    .site-error {
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .site-error h1 {
        font-size: 6rem;
    }
    .site-error .alert {
        font-size: 1.5rem;
    }
</style>

    <!---->
<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <div class="alert alert-danger">-->
<!--        --><?php //= nl2br(Html::encode($message)) ?>
<!--    </div>-->
<!---->
<!--    <p>-->
<!--        --><?php //= Yii::t("Yuqoridagi xato veb-server sizning so'rovingizni ko'rib chiqayotganda sodir bo'ldi.") ?>
<!--    </p>-->
<!--    <p>-->
<!--        --><?php //= Yii::t("Agar bu server xatoligi deb o'ylasangiz, biz bilan bog'laning. Rahmat.") ?>
<!--    </p>-->

<!--</div>-->
