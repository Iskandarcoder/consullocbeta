<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PmjSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Jarayonda');
$this->params['breadcrumbs'][] = $this->title;
?>

    <div class="well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= Yii::t('app', 'Toshkentga yuborilgan arizalar'); ?></b></h3></br>    
    <div class="docs-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Yangi ariza yaratish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                // 'id',
                'surname',
                'name',
                'mname',
                // 'pre_surname',
                //'pre_name',
                //'pre_mname',
                'birth_date',
                'birth_place',
                'citizenship_id',
                // [
                //     'attribute' => 'nation_id',
                //     'value' => 'spNationyii.sp_name_ru',
                // ],
                [
                    'attribute' => 'type_id',
                    'value' => 'spDoc_type.sp_name_'.Yii::$app->language,
                ],
                // 'type_place',
                // 'type_date',
                // 'fio_father',
                // 'fio_mother',
                // 'study_name',
                // 'study_place',
                // 'study_start_date',
                //'study_end_date',
                //'pension_reason',
                //'pension_date',
                //'pension_org',
                //'last_cost',
                //'last_cost_org',
                'doc_target',
                'living_place',
                'tel',
                'fax',
                //'sec_name',
                //'sec_surname',
                //'sec_mname',
                //'sec_birthplace',
                //'sec_birthdate',
                //'sec_citizenship_id',
                //'relative',
                //'sec_livingplace',
                //'sec_tel',
                //'sec_fax',
                //'scan_file:ntext',
                //'status_id',
                //'pre_citizenship_id',
                'email:email',
                //'division_id',
                //'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
