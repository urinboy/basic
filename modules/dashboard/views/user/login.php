<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = Yii::t('app', 'Kirish');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <h3 class="text-center mt-3"><?= Yii::t('app', Yii::$app->name) ?></h3>
<!--      <a href="/" class="h1"><img style="width:100px" src="--><?php //= Yii::t('app', "/logos/karsu_moodle-UZ.png") ?><!--" alt="--><?php //= Yii::t('app', "Masodfaviy Ta'lim") ?><!--"></a>-->
    </div>
    <div class="card-body">
        <div class="card-body">
           <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n{error}",
                            'labelOptions' => ['class' => 'col-form-label'],
                            'inputOptions' => ['class' => 'form-control', 'style' => 'margin-bottom:0'],
                            'errorOptions' => ['class' => 'invalid-feedback'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => Yii::t('app', "Loginni kiriting")]) ?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('app', "Parolni kiriting")]) ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>

                    <div class="form-group">
                        <div>
                            <?= Html::submitButton(Yii::t('app', 'Kirish'), ['class' => 'btn btn-primary w-100', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

