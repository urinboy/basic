<?php

namespace app\controllers\admin;

use yii\web\Controller;

class NewsController extends Controller
{
    public  $defaultAction = 'index';
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionView($id, $category = null)
    {
        /*
        |=============================================================|
        | BU BIRINCHI KO'RINISHI                                      |
        |=============================================================|
        | return "<h1>ID: {$id}</h1> <h1>Category: {$category}</h1>"; |
        |=============================================================|
        */

        /*
        |=============================================================|
        | BU IKKINCHI KO'RINISHI                                      |
        |=============================================================|
        | $saytAdmin = "UrinboyDev";                                  |
        |  return $this->render('view', [                             |
        |    'saytAdmin' => $saytAdmin,                               |
        |    'id' => $id,                                             |
        |    'category' => $category,                                 |
        | ]);                                                         |
        |=============================================================|
        */

        /*
        |----------------------------------------
        | BU UCHINCHI KO'RINISHI
        | VA albatda eng keraklisi bu YII::$app
        |----------------------------------------
        */

        /*----------------------------------
            echo '<pre>';
                print_r(\Yii::$app); die;
            echo '</pre>';
        */


        $saytAdmin = "UrinboyDev";
        return $this->render('view', compact('saytAdmin', 'id', 'category'));

    }

}