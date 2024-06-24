<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = Yii::t('app', 'Ro\'yxatdan o\'tish');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row justify-content-center">
        <div class="col-lg-12 m-3">
            <h1 class="d-flex justify-content-center"> <?= Html::encode($this->title) ?></h1>
            <p class="d-flex justify-content-center"></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-title">
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin() ?>
                    <div class="row">
                        <div class="col-lg-4"><?php echo $form->field($model, 'first_name')?></div>
                        <div class="col-lg-4"><?php echo $form->field($model, 'last_name')?></div>
                        <div class="col-lg-4"><?php echo $form->field($model, 'middle_name')?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"><?php echo $form->field($model, 'birth_day')?></div>
                        <div class="col-lg-6"><?php echo $form->field($model, 'phone_number')?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"><?php echo $form->field($model, 'course')?></div>
                        <div class="col-lg-6"><?php echo $form->field($model, 'group')?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12"><?php echo $form->field($model, 'address')?></div>
                        <div class="col-lg-6"><?php echo $form->field($model, 'pasport')?></div>
                        <div class="col-lg-6"><?php echo $form->field($model, 'email')?></div>
                    </div>

                    <?php echo Html::button(Yii::t('app','Ro\'yxatdan o\'tish'), ['type' => 'submit','class' => 'btn btn-success w-100']) ?>

                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>


<!--        --><?php //debug($model); ?>
<!--        <div class="col-lg-5">-->
<!---->
<!--            --><?php //$form = ActiveForm::begin([
//                'id' => 'login-form',
//                'fieldConfig' => [
//                    'template' => "{label}\n{input}\n{error}",
//                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
//                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
//                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
//                ],
//            ]); ?>
<!---->
<!--            --><?php //= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--            --><?php //= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--            --><?php //= $form->field($model, 'rememberMe')->checkbox([
//                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//            ]) ?>
<!---->
<!--            <div class="form-group">-->
<!--                <div>-->
<!--                    --><?php //= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!---->
<!--            <div style="color:#999;">-->
<!--                You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>-->
<!--                To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
<!--            </div>-->
<!---->
<!--        </div>-->
    </div>
</div>
