<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = Yii::t('models',  Yii::t('app', "Menyu qo'shish"));
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', Yii::t('app', "Menyu elementlari")), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-create">

<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
