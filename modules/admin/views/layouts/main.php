<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="<?=Yii::$app->homeUrl?>">
            <img src="<?=Yii::$app->homeUrl?>theme/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">Bojxona
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?=Yii::$app->homeUrl?>upload/<?=Yii::$app->user->identity->image?>">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Hush kelibsiz</h6>
                    </div>
                    <a href="<?=Yii::$app->urlManager->createUrl(['/admin/user/view','id'=>Yii::$app->user->id])?>" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Mening profilim</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <?php
                    echo Html::beginForm(['/site/logout'], 'post');
                    echo Html::submitButton(
                        '<i class="ni ni-user-run"></i>
                            <span>Chiqish</span>',
                        ['class' => 'btn btn-link logout']
                    );
                    echo Html::endForm();

                    ?>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="<?=Yii::$app->homeUrl?>">
                            <img src="<?=Yii::$app->homeUrl?>theme/assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none" method="get" action="<?=Yii::$app->urlManager->createUrl(['/admin/default/search'])?>">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" name="search" class="form-control form-control-rounded form-control-prepended" placeholder="Поиск" aria-label="Поиск">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <button type="submit" style="border: none; background-color: transparent; height: 100%"><span class="fa fa-search"></span></button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=Yii::$app->homeUrl?>admin/">
                        <i class="ni ni-tv-2 text-primary"></i> Bosh sahifa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Yii::$app->urlManager->createUrl(['/admin/dalolatnoma'])?>">
                        <i class="ni ni-books text-blue"></i> Deklaratsiyalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=Yii::$app->urlManager->createUrl(['/admin/user'])?>">
                        <i class="ni ni-single-02 text-yellow"></i> Foydalanuvchilar
                    </a>
                </li>


            </ul>

        </div>
    </div>
</nav>

<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?=Yii::$app->homeUrl?>admin">Bosh sahifa</a>
            <!-- Form -->
            <form action="<?=Yii::$app->urlManager->createUrl(['/admin/default/search'])?>" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Поиск" name="search" type="text">
                    </div>
                </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?=Yii::$app->homeUrl?>upload/<?=Yii::$app->user->identity->image?>">
                </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"><?=Yii::$app->user->identity->fio?></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Hush kelibsiz!</h6>
                        </div>
                        <a href="<?=Yii::$app->urlManager->createUrl(['/admin/user/view','id'=>Yii::$app->user->id])?>" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                                <span>Profil</span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <?php
                        echo Html::beginForm(['/site/logout'], 'post');
                        echo Html::submitButton(
                            '<i class="ni ni-user-run"></i>
                            <span>Chiqish</span>',
                            ['class' => 'btn btn-link logout']
                        );
                        echo Html::endForm();

                        ?>

                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <?=$content?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
