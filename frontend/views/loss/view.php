<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Loss */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Losses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="loss-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'guide',
            'surname',
            'name',
            'mname',
            'pre_mname',
            'living_place',
            'cause_id',
            'tel',
            'counrtry_id',
            'date',
            'city',
            'birt_date',
            'birth_place',
            'citizenship_id',
            'nationality_id',
            'education_id',
            'court',
            'marital_id',
            'wedding_date',
            'marital_surname',
            'marital_name',
            'marital_mname',
            'marital_bdate',
            'children',
            'pmj_id',
            'passport:ntext',
            'photo:ntext',
            'status_id',
            'comment',
        ],
    ]) ?>

</div>
