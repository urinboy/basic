<?php

namespace app\modules\dashboard\controllers;

use app\models\LoginForm;
use app\modules\dashboard\controllers\DefaultController;
use Yii;
use yii\filters\AccessControl;

class UserController extends DefaultController
{
    public $layout = 'login';
    public function actionLogin(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
}