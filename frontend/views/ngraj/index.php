<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NgrajSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ngrajs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ngraj-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ngraj'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'guide',
            'name',
            'pre_name',
            'surname',
            //'pre_surname',
            //'mname',
            //'pre_mname',
            //'birth_date',
            //'birth_place',
            //'nation_id',
            //'marital_status_id',
            //'consent_other_parent',
            //'education',
            //'conviction',
            //'conviction_date',
            //'conviction_bywhom',
            //'conviction_reason',
            //'army',
            //'army_branch',
            //'army_date_start',
            //'army_date_end',
            //'army_place',
            //'army_status',
            //'last_uzb_address',
            //'doc_left_type',
            //'doc_series',
            //'doc_number',
            //'doc_date',
            //'doc_bywhom',
            //'citizenship_take_id',
            //'reason_not_take',
            //'relatives_uzb_id',
            //'relatives_abroad_id',
            //'last_work_uzb',
            //'address',
            //'tel',
            //'email:email',
            //'passport_series',
            //'passport_number',
            //'cur_date',
            //'children_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
