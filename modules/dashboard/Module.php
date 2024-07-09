<?php

namespace app\modules\dashboard;

/**
 * dashboard module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\dashboard\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
//        \Yii::$app->errorHandler->errorAction = 'dashboard/default/error';
        parent::init();

        // custom initialization code goes here
    }
}
