<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DalolatnomaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deklaratsiyalar';
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
                    <div class="dalolatnoma-index">

                        <h1><?= Html::encode($this->title) ?></h1>

                        <p>
                            <?= Html::a('Deklaratsiya qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>

                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
//                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

//                                'id',
                                'familiya',
                                'ism',
                                'sharif',
                                'qaysi_tartib',
                                //'doimiy_yashash_joyi',
                                //'fuqoroligi',
                                //'qayerdan',
                                //'qayerga',
                                //'passport_seriya',
                                //'passport_raqam',
                                //'safardan_maqsad',
                                //'yuk',
                                //'ortiqcha_yuk',
                                //'valyuta1',
                                //'valyuta2',
                                //'valyuta3',
                                //'valyuta_qiymati1',
                                //'valyuta_qiymati2',
                                //'valyuta_qiymati3',
                                //'qimmatbaxo_metal1',
                                //'qimmatbaxi_metal2',
                                //'qimmatbaxo_metal_qiymati1',
                                //'qimmatbaxo_metal_qiymati2',
                                //'qurol',
                                //'giyohvand',
                                //'osimlik',
                                //'radio',
                                //'antika',
                                //'transport',
                                //'bosma',
                                //'soliq',
                                //'vaqtincha',
                                //'nomi1',
                                //'nomi2',
                                //'nomi3',
                                //'nomi4',
                                //'nomi5',
                                //'narxi1',
                                //'narxi2',
                                //'narxi3',
                                //'narxi4',
                                //'narxi5',
                                //'summa',
                                //'vaqt',
                                'status',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'header' => 'Amal',
                                    'template' => '{view}{update}{delete}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                            return Html::a(Yii::t('app', '<span class="fa fa-eye" style="width: 18px"></span>'), ['view', 'id' => $model->id], [
                                                    'class' => 'btn btn-success',
                                                ]).'<br>';
                                        },
                                        'update' => function ($url, $model) {
                                            return Html::a(Yii::t('app', '<span class="fa fa-edit" style="width: 18px"></span>'), ['update', 'id' => $model->id], [
                                                'class' => 'btn btn-primary'
                                            ]).'<br>';
                                        },
                                        'delete' => function ($url, $model) {
                                            return Html::a(Yii::t('app', '<span class="fa fa-trash" style="width: 18px"></span>'), ['delete', 'id' => $model->id], [
                                                'class' => 'btn btn-danger',
                                                'data' => [
                                                    'confirm' => Yii::t('app', 'Вы уверены, что хотите удалить этот элемент?'),
                                                    'method' => 'post',
                                                ],
                                            ]);
                                        }

                                    ],

                                ],
                            ],
                        ]); ?>


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


