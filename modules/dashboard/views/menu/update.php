<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = Yii::t('models', "Menyuni o'zgartirish", [
//    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', "Menyu elementlari"), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('models', "O'zgartirish");
?>
<div class="menu-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
