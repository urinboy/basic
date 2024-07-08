<?php

use app\models\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('models', Yii::t('app', "Menyu elementlari"));
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <p>
        <?= Html::a(Yii::t('models', Yii::t('app', "Menyu qo'shish")), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
            [
                'attribute' => 'parent_id',
                'value' => function ($model) {
                    return $model->parent ? "<span class='badge bg-success'>".$model->parent->title."</span>" : "<span class='badge bg-danger'>".Yii::t('models', Yii::t('app', "Mavjud emas"))."</span>";
                },
                'format' => 'html',
            ],
//            'order',
            [
                'attribute' => 'position',
                'value' => function ($model) {
                    foreach (Yii::$app->params['menuPositions'] as $key => $value) {
                        if ($key == $model->position) {
                            return "<span class='text-bold text-center d-inline-block'>".$value ."</span>" ;
                        }
                    }

                },
                'format' => 'html',
            ],
//            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
