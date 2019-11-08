<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dalolatnoma */

$this->title = $model->familiya.' '.$model->ism.' '.$model->sharif;
$this->params['breadcrumbs'][] = ['label' => 'Dalolatnomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<!-- Page content -->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card bg-gradient-lighter">
                <div class="card-body">
                    <!-- Chart -->

                    <div class="dalolatnoma-view">

                        <h1><?= Html::encode($this->title) ?></h1>

                        <div class="row">
                            <div class="col-lg-7">
                            <?= Html::a('Taxrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>

                            </div>
                            <div class="col-lg-5">
                                <?= Html::a('Ruxsat berish', ['update', 'id' => $model->id,'ruxsat'=>10], ['class' => 'btn btn-success pull-right']) ?>
                                <?= Html::a('Ruxsat bermaslik', ['update', 'id' => $model->id,'ruxsat'=>20], ['class' => 'btn btn-danger pull-right']) ?>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                            <p><?=$model->vaqt?></p>
                            </div>
                            <div class="col-lg-3">
                            <p class="pull-right"><?=$model->status?></p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-12 mb-5 mb-xl-0">
                        <div class="card shadow">
                            <div class="card-header border-0">
                            </div>
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                Qaysi tartib
                                            </td>
                                            <td>
                                                <?=$model->qaysi_tartib?>
                                            </td>
                                            <td>
                                                Doimiy yashash joyi
                                            </td>
                                            <td>
                                                <?=$model->doimiy_yashash_joyi?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Fuqoroligi
                                            </td>
                                            <td>
                                                <?=$model->fuqoroligi?>
                                            </td>
                                            <td>
                                                Passport seriya va raqam
                                            </td>
                                            <td>
                                                <?=$model->passport_seriya.$model->passport_raqam?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Fuqoroligi
                                            </td>
                                            <td>
                                                <?=$model->fuqoroligi?>
                                            </td>
                                            <td>
                                                Passport seriya va raqam
                                            </td>
                                            <td>
                                                <?=$model->passport_seriya.$model->passport_raqam?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Qayerdan
                                            </td>
                                            <td>
                                                <?=$model->qayerdan?>
                                            </td>
                                            <td>
                                                Qayerga
                                            </td>
                                            <td>
                                                <?=$model->qayerga?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Safardan maqsad
                                            </td>
                                            <td>
                                                <?=$model->safardan_maqsad?>
                                            </td>
                                            <td>
                                                Yuk (+ortiqcha yuk)
                                            </td>
                                            <td>
                                                <?=$model->yuk?>(+<?=$model->ortiqcha_yuk?>)
                                            </td>
                                        </tr>
                                        <?if($model->valyuta1){?>
                                            <tr>
                                                <td scope="row">
                                                    Valyuta
                                                </td>
                                                <td>
                                                    <?=$model->valyuta1?>
                                                </td>
                                                <td>
                                                    <?=$model->valyuta_qiymati1?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->valyuta2){?>
                                            <tr>
                                                <td scope="row">
                                                    Valyuta
                                                </td>
                                                <td>
                                                    <?=$model->valyuta2?>
                                                </td>
                                                <td>
                                                    <?=$model->valyuta_qiymati2?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->valyuta3){?>
                                            <tr>
                                                <td scope="row">
                                                    Valyuta
                                                </td>
                                                <td>
                                                    <?=$model->valyuta3?>
                                                </td>
                                                <td>
                                                    <?=$model->valyuta_qiymati3?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->qimmatbaxo_metal1){?>
                                            <tr>
                                                <td scope="row">
                                                    Qimmatbaxo metall
                                                </td>
                                                <td>
                                                    <?=$model->qimmatbaxo_metal1?>
                                                </td>
                                                <td>
                                                    <?=$model->qimmatbaxo_metal_qiymati1?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->qimmatbaxi_metal2){?>
                                            <tr>
                                                <td scope="row">
                                                    Qimmatbaxo metall
                                                </td>
                                                <td>
                                                    <?=$model->qimmatbaxi_metal2?>
                                                </td>
                                                <td>
                                                    <?=$model->qimmatbaxo_metal_qiymati2?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <tr>
                                            <td scope="row">
                                                Qurol , o'q-dorilar, portlovchi moddalar,
                                                <br> radioaktiv materiallar
                                            </td>
                                            <td>
                                                <?if($model->qurol){?>
                                                <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                            <td>
                                                Giyohvand, moddalar, psioptropnye, zahar
                                            </td>
                                            <td>
                                                <?if($model->giyohvand){?>
                                                    <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                    <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Osimlik va hayvonot dunyosi ob'ektlari, ularning <br>
                                                tarkibi va ulardan tayyorlangan mahsulotlar
                                            </td>
                                            <td>
                                                <?if($model->osimlik){?>
                                                <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                            <td>
                                                Yuqori chastotali radioelektron qurilmalar va
                                                <br>kommunikatsiyalar
                                            </td>
                                            <td>
                                                <?if($model->radio){?>
                                                    <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                    <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Antika va san'at
                                            </td>
                                            <td>
                                                <?if($model->antika){?>
                                                <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                            <td>
                                                Transport vositalari
                                            </td>
                                            <td>
                                                <?if($model->transport){?>
                                                    <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                    <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Bosma nashrlar va boshqa ma'lumotlar <br> tashuvchilari
                                            </td>
                                            <td>
                                                <?if($model->bosma){?>
                                                <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                            <td>
                                                Soliqqa tortiladigan tovarlar
                                            </td>
                                            <td>
                                                <?if($model->soliq){?>
                                                    <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                    <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">
                                                Vaqtinchalik kiritilgan(eksport) qilinadigan tovarlar
                                            </td>
                                            <td>
                                                <?if($model->vaqtincha){?>
                                                <i class="fa fa-check text-green"></i>
                                                <?}else{?>
                                                <i class="fa fa-times text-red"></i>
                                                <?}?>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>

                                        <?if($model->nomi1){?>
                                            <tr>
                                                <td scope="row">
                                                    Nomi
                                                </td>
                                                <td>
                                                    <?=$model->nomi1?>
                                                </td>
                                                <td>
                                                    <?=$model->narxi1?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->nomi2){?>
                                            <tr>
                                                <td scope="row">
                                                    Nomi
                                                </td>
                                                <td>
                                                    <?=$model->nomi2?>
                                                </td>
                                                <td>
                                                    <?=$model->narxi2?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->nomi3){?>
                                            <tr>
                                                <td scope="row">
                                                    Nomi
                                                </td>
                                                <td>
                                                    <?=$model->nomi3?>
                                                </td>
                                                <td>
                                                    <?=$model->narxi3?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->nomi4){?>
                                            <tr>
                                                <td scope="row">
                                                    Nomi
                                                </td>
                                                <td>
                                                    <?=$model->nomi4?>
                                                </td>
                                                <td>
                                                    <?=$model->narxi4?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->nomi5){?>
                                            <tr>
                                                <td scope="row">
                                                    Nomi
                                                </td>
                                                <td>
                                                    <?=$model->nomi5?>
                                                </td>
                                                <td>
                                                    <?=$model->narxi5?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                        <?if($model->summa){?>
                                            <tr>
                                                <td scope="row">
                                                </td>
                                                <td>
                                                    Summa
                                                </td>
                                                <td>
                                                    <?=$model->summa?>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
