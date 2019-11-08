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
                                <h2>Deklaratsiya holatini tekshirish</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <?= $form->field($model, 'passport_seriya')->textInput(['maxlength' => true]) ?>

                                            </div>
                                            <div class="col-lg-8">

                                                <?= $form->field($model, 'passport_raqam')->textInput(['maxlength' => true]) ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <!--                                        --><?//= $form->field($model, 'status')->dropDownList(['Ariza jo\'natilgan'=>'Ariza jo\'natilgan','Ruxsat berilgan'=>'Ruxsat berilgan','Ruxsat berilmagan'=>'Ruxsat berilmagan']) ?>

                                            </div>
                                            <div class="col-lg-4" style="padding-top: 2rem">
                                                <?= Html::submitButton('Tekshirish', ['class' => 'btn btn-success']) ?>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-12 card bg-gradient-lighter">
                                <?=$hech?>
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




