<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materi */

$this->title = 'Update Materi: ' . $model->id_materi;
$this->params['breadcrumbs'][] = ['label' => 'Materis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_materi, 'url' => ['view', 'id' => $model->id_materi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
