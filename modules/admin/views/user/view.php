<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$model->password='';
?>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a>
                                <img src="<?=Yii::$app->homeUrl.'upload/'.$model->image?>" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
                <div class="card-body pt-0 pt-md-4">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3>
                            <?=$model->fio?><span class="font-weight-light"></span>
                        </h3>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i><?=$model->username?>
                        </div>
                        <div>
                            <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Foydalanuvchi</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a style="color: white" class="btn btn-sm btn-primary">Sozlamalar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(['action'=>'/admin/user/update?id='.$model->id]); ?>
                    <h6 class="heading-small text-muted mb-4">Foydalanuvchi haqida</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">FIO</label>
                                    <?= $form->field($model, 'fio')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Parolni o'zgartirish</label>
                                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true])->label(false) ?> </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Login</label>
                                    <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="add-pic" class="add-pic-label" style="max-height: 200px">
                                        Rasm <br>
                                        <img id="blah" style="max-height: 200px" src="<?= Yii::$app->homeUrl?>upload/<?=$model->image ? $model->image : 'icon-camera.png'?>" alt="your image" class="add-image"/>
                                        <?= $form->field($model, 'image')->fileInput(['onchange'=>'readURL(this)','id'=>'add-pic','accept'=>'image/*'])->label('',['style'=>'display:none']) ?>
                                        <!--        <input type='file' onchange="readURL(this);" id="add-pic" accept="image/*"/>-->
                                    </label></div>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-success pull-right" style="position: absolute; right: 0; bottom: 0; top: auto;">O'zgartirish</button>
                            </div>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
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

