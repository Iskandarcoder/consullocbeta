<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LossSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Losses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loss-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Loss', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'guide',
            'surname',
            'name',
            'mname',
            //'pre_mname',
            //'living_place',
            //'cause_id',
            //'tel',
            //'counrtry_id',
            //'date',
            //'city',
            //'birt_date',
            //'birth_place',
            //'citizenship_id',
            //'nationality_id',
            //'education_id',
            //'court',
            //'marital_id',
            //'wedding_date',
            //'marital_surname',
            //'marital_name',
            //'marital_mname',
            //'marital_bdate',
            //'children',
            //'pmj_id',
            //'passport:ntext',
            //'photo:ntext',
            //'status_id',
            //'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
