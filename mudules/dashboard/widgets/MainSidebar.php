<?php

namespace app\mudules\dashboard\widgets;

use yii\bootstrap5\Widget;

class MainSidebar extends Widget
{
    public function run(){
        return $this->render('main-sidebar');
    }
}