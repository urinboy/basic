<?php

use app\models\Menu;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Menu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
               <div class="card-body">
                   <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map(Menu::find()->all(), 'id', 'title'), ['prompt' => Yii::t('models', "Parentni tanlang")]) ?>
                   <?= $form->field($model, 'position')->dropDownList(Yii::$app->params['menuPositions']) ?>
                   <div class="row">
                       <div class="col-lg-6">
                           <?= $form->field($model, 'order')->textInput() ?>
                       </div>
                       <div class="col-lg-6">
                           <?= $form->field($model, 'status')->textInput() ?>
                       </div>
                   </div>

                    <div class="form-group float-sm-right">
                        <?= Html::submitButton(Yii::t('models', Yii::t('app', "Qo'shish")), ['class' => 'btn btn-success  w-100']) ?>
                    </div>
               </div>
            </div>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
