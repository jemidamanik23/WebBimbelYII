<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MuridSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Murid';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="murid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Murid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_murid',
            'nim',
            'nama',
            'nk',
            'tgl_masuk',
            //'tgl_keluar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
