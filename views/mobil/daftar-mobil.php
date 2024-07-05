<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MobilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Mobil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container mobil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Mobil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nama_mobil',
            'kondisi',
            [
                'attribute' => 'harga',
                'value' => function($model) {
                    return Yii::$app->formatter->asDecimal($model->harga, 0);
                },
            ],
            'tahun',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
