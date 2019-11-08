<?php
/**
 * Created by PhpStorm.
 * User: Lord
 * Date: 20.06.2019
 * Time: 9:17
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="height: 100px">

</div>
<!-- Page content -->
<div class="container-fluid mt--7" style="margin-top: 50px">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card bg-gradient-lighter">
                <div class="card-body">
                    <!-- Chart -->
                    <div class="dalolatnoma-form">

                        <?php $form = ActiveForm::begin(); ?>
                        <div class="row">
                            <div class="col-lg-12 card bg-gradient-lighter">
                                <h2>Yo'lovchi haqida ma'lumot</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'familiya')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'ism')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'sharif')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <?= $form->field($model, 'passport_seriya')->textInput(['maxlength' => true]) ?>

                                            </div>
                                            <div class="col-lg-8">

                                                <?= $form->field($model, 'passport_raqam')->textInput(['maxlength' => true]) ?>

                                            </div>
                                        </div>

                                        <?= $form->field($model, 'doimiy_yashash_joyi')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'fuqoroligi')->textInput(['maxlength' => true]) ?>

                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-12 card bg-gradient-lighter" style="margin-top: 20px">
                                <h2>Yo'nalishni belgilang</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?= $form->field($model, 'qaysi_tartib')->dropDownList(['Kirish'=>'Kirish','Chiqish'=>'Chiqish','Tranzit'=>'Tranzit']) ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'qayerdan')->textInput(['maxlength' => true]) ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'qayerga')->textInput(['maxlength' => true]) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?= $form->field($model, 'safardan_maqsad')->radioList(['Xizmat ko\'rsatish'=>'Xizmat ko\'rsatish',
                                    'O\'qish'=>'O\'qish','Ish'=>'Ish','Turist'=>'Turist','Qarindoshlarni ziyorat qilish'=>'Qarindoshlarni ziyorat qilish',
                                    'Davolanish'=>'Davolanish','Doimiy yashash'=>'Doimiy yashash','Savdo'=>'Savdo']) ?>
                            </div>
                            <div class="col-lg-12 card bg-gradient-lighter" style="margin-top: 20px">
                                <h2>Yuklarni belgilang</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'yuk')->textInput(['type'=>'number']) ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'ortiqcha_yuk')->textInput(['type'=>'number']) ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'qimmatbaxo_metal1')->textInput(['maxlength' => true]) ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'qimmatbaxo_metal_qiymati1')->textInput() ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'qimmatbaxi_metal2')->textInput(['maxlength' => true]) ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'qimmatbaxo_metal_qiymati2')->textInput() ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'valyuta1')->textInput(['maxlength' => true]) ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'valyuta_qiymati1')->textInput() ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'valyuta2')->textInput(['maxlength' => true]) ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'valyuta_qiymati2')->textInput() ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'valyuta3')->textInput(['maxlength' => true]) ?>
                                            </div>
                                            <div class="col-lg-6">
                                                <?= $form->field($model, 'valyuta_qiymati3')->textInput() ?>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-12">
                                        <h2>
                                            Taqiqlangan jihozlar
                                        </h2>
                                        <div class="row">
                                            <div class="col-lg-6 " >
                                                <?= $form->field($model, 'qurol')->checkbox() ?>
                                                <?= $form->field($model, 'giyohvand')->checkbox() ?>
                                                <?= $form->field($model, 'osimlik')->checkbox() ?>

                                                <?= $form->field($model, 'radio')->checkbox() ?>

                                                <?= $form->field($model, 'antika')->checkbox() ?>
                                                <?= $form->field($model, 'transport')->checkbox() ?>
                                                <?= $form->field($model, 'bosma')->checkbox() ?>

                                                <?= $form->field($model, 'soliq')->checkbox() ?>

                                                <?= $form->field($model, 'vaqtincha')->checkbox() ?>

                                            </div>
                                            <div class="col-lg-6 card bg-gradient-lighter" >
                                                <h3>Taqiqlangan jihozlar ro'yxati</h3>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <?= $form->field($model, 'nomi1')->textInput(['maxlength' => true]) ?>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <?= $form->field($model, 'narxi1')->textInput(['type'=>'number']) ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <?= $form->field($model, 'nomi2')->textInput(['maxlength' => true]) ?>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <?= $form->field($model, 'narxi2')->textInput(['type'=>'number']) ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <?= $form->field($model, 'nomi3')->textInput(['maxlength' => true]) ?>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <?= $form->field($model, 'narxi3')->textInput(['type'=>'number']) ?>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <?= $form->field($model, 'nomi4')->textInput(['maxlength' => true]) ?>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <?= $form->field($model, 'narxi4')->textInput(['type'=>'number']) ?>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <?= $form->field($model, 'nomi5')->textInput(['maxlength' => true]) ?>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <?= $form->field($model, 'narxi5')->textInput(['type'=>'number']) ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-12 card bg-gradient-lighter">
                                <div class="row">
                                    <div class="col-lg-9">
<!--                                        --><?//= $form->field($model, 'status')->dropDownList(['Ariza jo\'natilgan'=>'Ariza jo\'natilgan','Ruxsat berilgan'=>'Ruxsat berilgan','Ruxsat berilmagan'=>'Ruxsat berilmagan']) ?>

                                    </div>
                                    <div class="col-lg-3" style="padding-top: 2rem">
                                        <?= Html::submitButton('Ariza jo\'natish', ['class' => 'btn btn-success']) ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
</div>




