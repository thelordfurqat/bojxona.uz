<?php

/* @var $this yii\web\View */

$this->title = 'Bojxona.uz';
?>
<main>
    <div class="position-relative">
        <!-- Hero for FREE version -->
        <section class="section section-lg section-hero section-shaped">
            <!-- Background circles -->
            <div class="shape shape-style-1 shape-primary">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
            </div>
            <div class="container shape-container d-flex align-items-center py-lg">
                <div class="col px-0">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <img src="<?=Yii::$app->homeUrl?>themeadmin/assets/img/brand/white.png" style="width: 200px;" class="img-fluid">
                            <p class="lead text-white">Bojxona hizmatlaridan online ravishda foydalaning hamda vaqtingizni tejang</p>
                            <div class="btn-wrapper mt-5">
                                <a href="<?= Yii::$app->urlManager->createUrl(['site/create']) ?>" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                    <span class="btn-inner--text"> Ariza yuborish</span>
                                </a>
                                <a href="<?= Yii::$app->urlManager->createUrl(['site/check']) ?>" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                                    <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                                    <span class="btn-inner--text">
                                        Tekshirish</span>
                                </a>
                            </div>
                            <div class="mt-5">
                                <small class="text-white font-weight-bold mb-0 mr-2">Barchasi shu yerning o'zida</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
    </div>
    <section class="section section-lg section-nucleo-icons pb-250">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-3">Online ariza jo'natish</h2>
                    <p class="lead">
                        Addres: 3, Islam Karimov street, Tashkent, 100003, Uzbekistan.
                        Phone: (998-71) 120-76-31, Fax: (998-71) 120-76-41
                        Ишлаб чиқилган: ЯИ
                        Сайтдан олинган ҳар қандай
                        маълумотлардан фойдаланганда
                        Ўзбекистон Республикаси ДБҚ сайтидан
                        олинганлиги кўрсатиб ўтилиши шарт.
                        ЎзМАА Интернет-ОАВ гувоҳномаси № 0902
                        © 2001-2019 Ўзбекистон Республикаси Давлат божхона қўмитаси.
                        Электон манзилимиз: info@customs.uz.
                        Барча ҳуқуқлар ҳимояланган. ЎзР ДБҚ. © 2001-2019
                    </p>
                </div>
            </div>
            <div class="blur--hover">
                    <div class="icons-container blur-item mt-5" data-toggle="on-screen">
                        <img src="<?= Yii::$app->homeUrl ?>upload/declaration.jpg" alt="" style="width: 100%; height: 100%">
                    </div>
                    <span class="blur-hidden h5 text-success">Shu kungacha <?=sizeof(\app\models\Dalolatnoma::find()->all())?>ta ariza yuborilgan</span>
            </div>
        </div>
    </section>
    <section class="section section-lg section-shaped">
        <div class="shape shape-style-1 shape-default">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container py-md">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h3 class="display-3 text-white">Bojxona xizmati isloh qilinadi
                    </h3>
                    <p class="lead text-white">Prezident davlat bojxona xizmati organlari faoliyatini tubdan takomillashtirish to‘g‘risidagi farmonni imzoladi.</p>
                    <div class="btn-wrapper">
                     </div>
                </div>
                <div class="col-lg-5 mb-lg-auto">
                    <img src="<?=Yii::$app->homeUrl?>upload/rasm1.jpg" alt="" style="width: 100%; height: 100%">
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
</main>
