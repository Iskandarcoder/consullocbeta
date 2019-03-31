<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SpDoc_Type */

$this->title = $model->sp_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Doc  Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-doc--type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->sp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->sp_id], [
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
            'sp_id',
            'sp_name_cryl',
            'sp_name_ru',
            'sp_name_qrc',
            'sp_name_en',
            'sp_name_uz',
            'sp_name_qrl',
            'sp_active',
            'sp_dateenter',
            'sp_scn',
            'sp_idold',
            'sp_idfirst',
        ],
    ]) ?>

</div>
