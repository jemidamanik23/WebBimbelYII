<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Murid */

$this->title = 'Update Murid: ' . $model->id_murid;
$this->params['breadcrumbs'][] = ['label' => 'Murids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_murid, 'url' => ['view', 'id' => $model->id_murid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="murid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
