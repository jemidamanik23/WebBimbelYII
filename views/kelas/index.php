<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kelas',
            'nk',
            'nama_kelas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
