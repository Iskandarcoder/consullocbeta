<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LossSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Losses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <div class="loss-index">

       
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                //'guide',
                'surname',
                'name',
                'mname',
                'pre_mname',
                //'living_place',
                //'cause_id',
                //'tel',
                //'mail',
                //'country_id',
                //'date',
                //'city',
                'birt_date',
                //'birth_place',
                //'citizenship_id',
                [
                    'attribute' => 'nationality_id',
                    'value' => 'spNation.sp_name_ru',
                ],
                //'education_id',
                //'court',
                //'marital_id',
                //'wedding_date',
                //'marital_fio',
                //'marital_bdate',
                //'last_place',                
                [
                    'attribute' => 'pmj_id',
                    'value' => 'spCountry2.sp_name_ru',
                ],
                //'enter_date',
                //'passport:ntext',
                //'photo:ntext',
                //'status_id',
                //'comment',
                //'division_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
