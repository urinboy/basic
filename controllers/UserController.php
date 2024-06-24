<?php

namespace app\controllers;

use app\models\RegistrationForm;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionIndex()
    {
        return $this->render('profile');
    }

    public function actionProfile()
    {

        // Boshqa sahifaga automatik yuborish uchun
//        $this->view->registerMetaTag([
//            'http-equiv' => 'refresh',
//            'content' => '3;URL=https://itorda.uz'
//        ]);

        $this->view->registerCsrfMetaTags();

        $this->view->registerMetaTag([
            'name' => 'description',
            'content' => 'description'
        ]);
        $this->view->registerMetaTag([
            'name' => 'keywords',
            'content' => 'keywords'
        ]);
        $this->view->registerMetaTag([
            'name' => 'author',
            'content' => 'author'
        ]);
        $this->view->registerMetaTag([
            'property' => 'og:title',
            'content' => 'title'
        ]);
        $this->view->registerMetaTag([
            'property' => 'og:description',
            'content' => 'description'
        ]);
        $this->view->registerMetaTag([
            'property' => 'og:url',
            'content' => 'url'
        ]);
        $this->view->registerMetaTag([
            'property' => 'og:image',
            'content' => 'image'
        ]);
        $this->view->registerMetaTag([
            'property' => 'og:type',
            'content' => 'website'
        ]);
        $this->view->registerMetaTag([
            'property' => 'og:locale',
            'content' => 'locale'
        ]);
        $this->view->registerMetaTag([
            'property' => 'og:site_name',
            'content' => 'site_name'
        ]);


        return $this->render('profile');
    }

    public function actionProducts($userName = null)
    {
        $productsList = ['Iphone', 'Samsung', 'Imac', 'Iwatch'];
        return $this->render('products', compact('userName','productsList'));
    }

    public function actionRegister()
    {
        $model = new RegistrationForm();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())){
            debug($model); die;
        }

        return $this->render('register', compact('model'));
    }

}