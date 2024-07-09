<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use app\components\LanguageDropdown;

AppAsset::register($this);

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
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::t('app', Yii::$app->name),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);

    // Left aligned brand
    echo '<div class="navbar-brand d-flex">';
//    echo Html::a(Yii::$app->name, Yii::$app->homeUrl, ['class' => 'navbar-brand']);
    echo '</div>';

    // Center aligned menu items for larger screens
    echo '<div class="navbar-collapse">';
    echo '<div class="navbar-collapse align-items-center justify-content-center">';
    $menuItems = [
        ['label' => Yii::t('app', 'Bosh sahifa'), 'url' => ['/site/index']],
        ['label' => Yii::t('app', 'Biz haqimizda'), 'url' => ['/site/about']],
//        ['label' => Yii::t('app', 'Yangiliklar'), 'url' => ['/admin/news/index']],
        ['label' => Yii::t('app', 'Bog\'lanish'), 'url' => ['/site/contact']],
        ['label' => LanguageDropdown::label(Yii::$app->language), 'items' => LanguageDropdown::widget()]
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);

    echo '</div>';

    // Right aligned auth links
    echo '<ul class="navbar-nav ml-auto">';
    if (Yii::$app->user->isGuest) {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                    ['label' => Yii::t('app', 'Kirish'), 'url' => ['/site/login']],
//                    ['label' => Yii::t('app', 'Ro\'yxatdan o\'tish'), 'url' => ['/user/register']]
            ],
        ]);
    } else {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => Yii::t('app', 'Dashboard'), 'url' => ['/dashboard']],
                '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        Yii::t('app', 'Chiqish (') . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>',
            ],
        ]);
    }
    echo '</ul>';
    echo '</div>';

    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; <?= Yii::t('app', Yii::$app->name) ?> - <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end">
                <?= Yii::t('app', "Qoraqalpoq davlat universiteti") ?>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
