<?php

use app\components\LanguageDropdown;
use yii\helpers\Html;
use yii\helpers\Url;

$langs = [
        ['id' => 'uz', 'name' => 'O\'zbek', 'flag' => 'uz.png'],
        ['id' => 'kaa', 'name'  => 'Qaraqalpaq', 'flag' => 'kaa.png'],
        ['id' => 'ru', 'name'  => 'Русский', 'flag' => 'ru.png'],
        ['id' => 'en', 'name'  => 'English', 'flag' => 'en.png'],
];

?>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a target="_blank" href="<?= Url::home() ?>" class="nav-link"><?= Yii::t('app', "Bosh sahifa") ?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <?php if(!empty($langs)): ?>
                <?php foreach ($langs as $lang): ?>
                    <?php if($lang['id'] == Yii::$app->language ): ?>
                        <img src="/flags/<?= $lang['flag'] ?>" alt="<?= $lang['name'] ?>" class="img-size-32 mr-3 img-circle">
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <?php if(!empty($langs)): ?>
                <?php foreach ($langs as $lang): ?>
                  <a href="/<?= $lang['id'] ?>/dashboard" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="/flags/<?= $lang['flag'] ?>" alt="<?= $lang['name'] ?>" class="img-size-32 mr-3 img-circle">
                      <div class="media-body">
                        <h3 class="dropdown-item-title mt-2 text-bold"><?= $lang['name'] ?></h3>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#settings" class="dropdown-item">
            <i class="fas fa-cogs"></i> <?= Yii::t('app', "Sozlamalar") ?>
          </a>

          <div class="dropdown-divider"></div>
                <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'dropdown-item']) ?>
                <?= Html::submitButton(
                    '<i class="fas fa-door-open"></i> ' . Yii::t('app', 'Chiqish'),
                    ['class' => 'btn btn-link logout', 'style' => 'padding: 0; border: none; background: none;']
                ) ?>
                <?= Html::endForm() ?>

<!--          <a href="#" class="dropdown-item">-->
<!--              <i class="fas fa-door-open"></i> --><?php //= Yii::t('app', "Chiqish") ?>
<!--          </a>-->
        </div>
      </li>
    </ul>
  </nav>
 <!-- /.navbar -->