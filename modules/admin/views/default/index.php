<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$dalolatnomas=\app\models\Dalolatnoma::find()->all();
$valyuta=0;
$qimmatbaxo=0;
foreach ($dalolatnomas as $item){
    if($item->valyuta_qiymati1)
    $valyuta+=$item->valyuta_qiymati1;
    if($item->valyuta_qiymati2)
    $valyuta+=$item->valyuta_qiymati2;
    if($item->valyuta_qiymati3)
        $valyuta+=$item->valyuta_qiymati3;

    if($item->qimmatbaxo_metal_qiymati1)
        $qimmatbaxo+=$item->qimmatbaxo_metal_qiymati1;
    if($item->qimmatbaxo_metal_qiymati2)
        $qimmatbaxo+=$item->qimmatbaxo_metal_qiymati2;
}
?>

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Fuqorolar</h5>
                                        <span class="h2 font-weight-bold mb-0"><?=sizeof(\app\models\Dalolatnoma::find()->where(['qaysi_tartib'=>'Kirish'])->all())?>ta</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fa fa-sign-in-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-down"></i> </span>
                                    <span class="text-nowrap">Davlatga fuqoro kirdi</span>
                                </p>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Fuqorolar</h5>
                                        <span class="h2 font-weight-bold mb-0"><?=sizeof(\app\models\Dalolatnoma::find()->where(['qaysi_tartib'=>'Chiqish'])->all())?>ta</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                    <span class="text-nowrap">Davlatdan fuqoro chiqdi</span>
                                </p>

                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Valyuta</h5>
                                        <span class="h2 font-weight-bold mb-0"><?=$valyuta?>$
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                        <span class="text-nowrap">Valyuta davlatga kirdi</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Oltin</h5>
                                    <span class="h2 font-weight-bold mb-0"><?=$qimmatbaxo?>$
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                    <span class="text-nowrap">Qimmatbaxo metal chiqdi</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow border-0">
                <img src="<?= Yii::$app->homeUrl ?>upload/tatu.jpg" alt="">
            </div>
        </div>

    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2019 <a href="http://www.ubtuit.uz/" class="font-weight-bold ml-1" target="_blank">UBTUIT</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="http://www.ubtuit.uz/" class="nav-link" target="_blank">Ushbu veb sahifa TATU Urganch filiali talabasi tomonidan yaratildi</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
