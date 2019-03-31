<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizenship */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Citizenships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="citizenship-view">

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
            'pre_surname',
            'pre_name',
            'pre_mname',
            'birth_date',
            'nationality_id',
            'study_id',
            'profession',
            'marital_id',
            'marital_name',
            'marital_bdate',
            'marital_nation',
            'marital_place',
            'court',
            'army',
            'army_now',
            'medal',
            'pmj',
            'last_place',
            'visit_uzb',
            'business',
            'citizenship_id',
            'cause',
            'living_place',
            'tel',
            'file1:ntext',
            'file2:ntext',
            'file3:ntext',
            'file4:ntext',
            'status_id',
            'comment',
            'division_id',
        ],
    ]) ?>

</div>
