<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TugasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tugas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tugas') ?>

    <?= $form->field($model, 'id_materi') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'tgl_dikirim') ?>

    <?= $form->field($model, 'tugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
