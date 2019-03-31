<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CitizenshipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citizenships';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= Yii::t('app', 'O`zbekiston Respublikasi fuqaroligidan chiqish uchun to`ldirilgan anketalar jarayoni'); ?></b></h3></br>
    <div class="citizenship-index">
       
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?> 

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                //'guide',
                //'photo:ntext',
                'surname',
                'name',
                'mname',
                //'pre_surname',
                //'pre_name',
                //'pre_mname',
                //'social_status',
                //'birth_date',
                [
                        'attribute' => 'nationality_id',
                        'value' => 'spNation.sp_name_ru',
                    ],
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
                 [
                        'attribute' => 'status_id',
                        'value' => 'status.name_ru',
                    ],
                //'comment',
                //'division_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>

