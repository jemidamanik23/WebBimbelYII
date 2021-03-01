<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tugas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tugas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tugas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tugas',
            'id_materi',
            'nim',
            'tgl_dikirim',
            'nama_tugas',
            'tugas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
