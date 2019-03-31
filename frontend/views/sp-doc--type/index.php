<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SpDoc_TypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sp Doc  Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-doc--type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sp Doc  Type'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sp_id',
            'sp_name_cryl',
            'sp_name_ru',
            'sp_name_qrc',
            'sp_name_en',
            // 'sp_name_uz',
            // 'sp_name_qrl',
            // 'sp_active',
            // 'sp_dateenter',
            // 'sp_scn',
            // 'sp_idold',
            // 'sp_idfirst',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
