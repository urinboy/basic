<?php

namespace app\modules\dashboard\widgets;

use yii\bootstrap5\Widget;

class ControlSidebar extends Widget
{
    public function run(){
        return $this->render('control-sidebar');
    }
}