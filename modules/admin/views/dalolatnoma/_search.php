<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DalolatnomaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dalolatnoma-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'familiya') ?>

    <?= $form->field($model, 'ism') ?>

    <?= $form->field($model, 'sharif') ?>

    <?= $form->field($model, 'qaysi_tartib') ?>

    <?php // echo $form->field($model, 'doimiy_yashash_joyi') ?>

    <?php // echo $form->field($model, 'fuqoroligi') ?>

    <?php // echo $form->field($model, 'qayerdan') ?>

    <?php // echo $form->field($model, 'qayerga') ?>

    <?php // echo $form->field($model, 'passport_seriya') ?>

    <?php // echo $form->field($model, 'passport_raqam') ?>

    <?php // echo $form->field($model, 'safardan_maqsad') ?>

    <?php // echo $form->field($model, 'yuk') ?>

    <?php // echo $form->field($model, 'ortiqcha_yuk') ?>

    <?php // echo $form->field($model, 'valyuta1') ?>

    <?php // echo $form->field($model, 'valyuta2') ?>

    <?php // echo $form->field($model, 'valyuta3') ?>

    <?php // echo $form->field($model, 'valyuta_qiymati1') ?>

    <?php // echo $form->field($model, 'valyuta_qiymati2') ?>

    <?php // echo $form->field($model, 'valyuta_qiymati3') ?>

    <?php // echo $form->field($model, 'qimmatbaxo_metal1') ?>

    <?php // echo $form->field($model, 'qimmatbaxi_metal2') ?>

    <?php // echo $form->field($model, 'qimmatbaxo_metal_qiymati1') ?>

    <?php // echo $form->field($model, 'qimmatbaxo_metal_qiymati2') ?>

    <?php // echo $form->field($model, 'qurol') ?>

    <?php // echo $form->field($model, 'giyohvand') ?>

    <?php // echo $form->field($model, 'osimlik') ?>

    <?php // echo $form->field($model, 'radio') ?>

    <?php // echo $form->field($model, 'antika') ?>

    <?php // echo $form->field($model, 'transport') ?>

    <?php // echo $form->field($model, 'bosma') ?>

    <?php // echo $form->field($model, 'soliq') ?>

    <?php // echo $form->field($model, 'vaqtincha') ?>

    <?php // echo $form->field($model, 'nomi1') ?>

    <?php // echo $form->field($model, 'nomi2') ?>

    <?php // echo $form->field($model, 'nomi3') ?>

    <?php // echo $form->field($model, 'nomi4') ?>

    <?php // echo $form->field($model, 'nomi5') ?>

    <?php // echo $form->field($model, 'narxi1') ?>

    <?php // echo $form->field($model, 'narxi2') ?>

    <?php // echo $form->field($model, 'narxi3') ?>

    <?php // echo $form->field($model, 'narxi4') ?>

    <?php // echo $form->field($model, 'narxi5') ?>

    <?php // echo $form->field($model, 'summa') ?>

    <?php // echo $form->field($model, 'vaqt') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
