<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\DashboardAsset;
use app\modules\dashboard\widgets\Footer;
use app\modules\dashboard\widgets\MainSidebar;
use app\modules\dashboard\widgets\Navbar;
use app\widgets\Alert;
//use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

DashboardAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?> - <?= Yii::t('app', Yii::$app->name ) ?></title>
    <?php $this->head() ?>
</head>

<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
    <?= Navbar::widget() ?>

    <?= MainSidebar::widget() ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= Html::encode($this->title) ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

              <?= Breadcrumbs::widget([
                      'homeLink' => [
                            'label' => Yii::t('app', "Bosh sahifa"),
                            'url' => ['/dashboard'],
                        ],
                      'options' => ['class' => 'breadcrumb float-sm-right'],
                  'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
              ]) ?>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    <!-- /.content -->
  </div>
   <!-- /.content-wrapper -->

<!--    --><?php //= ControlSidebar::widget() ?>

    <?= Footer::widget() ?>
</div>
<!-- ./wrapper -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
