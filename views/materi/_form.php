<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nk')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <?= $form->field($model, 'tgl_dibuat')->textInput() ?>

    <?= $form->field($model, 'nama_materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tugas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
