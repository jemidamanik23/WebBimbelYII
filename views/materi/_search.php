<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MateriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_materi') ?>

    <?= $form->field($model, 'nk') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'tgl_dibuat') ?>

    <?= $form->field($model, 'file_materi') ?>

    <?php // echo $form->field($model, 'tugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
