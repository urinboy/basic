<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */

$this->title = $model->title;
$this->title = Yii::t('models',  Yii::t('app', "Menyu ma'lumotlari"));
$this->params['breadcrumbs'][] = ['label' =>  Yii::t('models',  Yii::t('app', "Menyu elementlari")), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-view">

    <p>
        <?= Html::a(Yii::t('models', "O'zgartirish"), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('models', "O'chirish"), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('models', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'parent_id',
            'order',
            'link',
            'position',
            'status',
        ],
    ]) ?>

</div>
