<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foydalanuvchilar';
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
                    <div class="user-index">

                        <h1><?= Html::encode($this->title) ?></h1>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <p>
                            <?= Html::a('Foydalanuvchi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                                [
                                    'attribute'=>'image',
                                    'value'=>function($d){
                                        return "<object data='/web/upload/{$d->image}' type='image/png' style='width: 100px'><img src='/web/upload/avatar.jpg' style='width:100px;'></object>";

                                    },
                                    'filter'=>false,
                                    'format'=>'raw'
                                ],
                                'fio',
                                [
                                    'attribute'=>'username',
                                    'headerOptions' => ['style' => 'width:25%'],
                                ],

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'header' => 'Действия',
                                    'template' => '{view}{update}{delete}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                            return Html::a(Yii::t('app', '<span class="fa fa-eye" style="width: 18px"></span>'), ['view', 'id' => $model->id], [
                                                    'class' => 'btn btn-success',
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


