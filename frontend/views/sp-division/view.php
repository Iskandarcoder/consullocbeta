<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SpDivision */

<<<<<<< HEAD
$this->title = $model->sp_id;
=======
$this->title = $model->id;
>>>>>>> aa4b3562e521a8ba62c133b5d1d8a9ab9a50952b
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Divisions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-division-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->sp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->sp_id], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
>>>>>>> aa4b3562e521a8ba62c133b5d1d8a9ab9a50952b
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
<<<<<<< HEAD
            'sp_id',
            'sp_name_cryl',
            'sp_name_ru',
            'sp_name_qrc',
            'sp_name_en',
            'sp_name_uz',
            'sp_name_qrl',
=======
            'id',
            'sp_id',
            'KODST_ZU',
            'sp_name00',
            'sp_name01',
            'sp_name02',
            'sp_name03',
            'sp_name04',
            'sp_name05',
>>>>>>> aa4b3562e521a8ba62c133b5d1d8a9ab9a50952b
            'sp_country',
            'sp_region',
            'sp_district',
            'sp_level',
            'sp_code',
            'sp_isbio',
            'sp_active',
            'sp_dateenter',
            'sp_scn',
            'sp_idold',
            'sp_idfirst',
        ],
    ]) ?>

</div>
