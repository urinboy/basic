<?php

namespace app\mudules\dashboard\controllers;

use yii\web\Controller;

/**
 * Default controller for the `dashboard` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public $layout = 'dashboard';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
