<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = Yii::t('app', 'Kirish');
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
        <div class="col-lg-5">

            <div class="card shadow">
                <div class="card-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n{error}",
                            'labelOptions' => ['class' => 'col-lg-6 col-form-label mr-lg-3'],
                            'inputOptions' => ['class' => 'col-lg-3 form-control'],
                            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>

                    <div class="form-group">
                        <div>
                            <?= Html::submitButton(Yii::t('app', 'Kirish'), ['class' => 'btn btn-primary w-100', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>

<!--                    <div style="color:#999;">-->
<!--                        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>-->
<!--                        To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
<!--                    </div>-->

                </div>
            </div>

        </div>
    </div>
</div>
