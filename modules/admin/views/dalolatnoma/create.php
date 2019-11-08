<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dalolatnoma */

$this->title = 'Deklaratsiya yozish';
$this->params['breadcrumbs'][] = ['label' => 'Dalolatnomas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
                    <div class="dalolatnoma-create">

                        <h1><?= Html::encode($this->title) ?></h1>

                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>

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


