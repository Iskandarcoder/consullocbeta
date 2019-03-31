<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CitizenshipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citizenships';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citizenship-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Citizenship', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'pre_surname',
            //'pre_name',
            //'pre_mname',
            //'birth_date',
            //'nationality_id',
            //'study_id',
            //'profession',
            //'marital_id',
            //'marital_name',
            //'marital_bdate',
            //'marital_nation',
            //'marital_place',
            //'court',
            //'army',
            //'army_now',
            //'medal',
            //'pmj',
            //'last_place',
            //'visit_uzb',
            //'business',
            //'citizenship_id',
            //'cause',
            //'living_place',
            //'tel',
            //'file1:ntext',
            //'file2:ntext',
            //'file3:ntext',
            //'file4:ntext',
            //'status_id',
            //'comment',
            //'division_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
