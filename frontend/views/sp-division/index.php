<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SpDivisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sp Divisions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-division-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sp Division'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            'sp_id',
            'sp_name_cryl',
            'sp_name_ru',
            'sp_name_qrc',
            'sp_name_en',
            // 'sp_name_uz',
            // 'sp_name_qrl',
=======
            'id',
            'sp_id',
            'KODST_ZU',
            'sp_name00',
            'sp_name01',
            // 'sp_name02',
            // 'sp_name03',
            // 'sp_name04',
            // 'sp_name05',
>>>>>>> aa4b3562e521a8ba62c133b5d1d8a9ab9a50952b
            // 'sp_country',
            // 'sp_region',
            // 'sp_district',
            // 'sp_level',
            // 'sp_code',
            // 'sp_isbio',
            // 'sp_active',
            // 'sp_dateenter',
            // 'sp_scn',
            // 'sp_idold',
            // 'sp_idfirst',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
