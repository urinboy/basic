<?php

use yii\helpers\Url;

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
          <a href="#" class="dropdown-item">
              <i class="fas fa-door-open"></i> <?= Yii::t('app', "Chiqish") ?>
          </a>
        </div>
      </li>
    </ul>
  </nav>
 <!-- /.navbar -->