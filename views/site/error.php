<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        <?= Yii::t("Yuqoridagi xato veb-server sizning so'rovingizni ko'rib chiqayotganda sodir bo'ldi.") ?>
    </p>
    <p>
        <?= Yii::t("Agar bu server xatoligi deb o'ylasangiz, biz bilan bog'laning. Rahmat.") ?>
    </p>

</div>
