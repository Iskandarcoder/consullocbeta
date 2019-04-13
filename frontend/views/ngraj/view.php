<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Ngraj */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ngrajs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ngraj-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'guide',
            'name',
            'pre_name',
            'surname',
            'pre_surname',
            'mname',
            'pre_mname',
            'birth_date',
            'birth_place',
            'nation_id',
            'marital_status_id',
            'consent_other_parent',
            'education',
            'conviction',
            'conviction_date',
            'conviction_bywhom',
            'conviction_reason',
            'army',
            'army_branch',
            'army_date_start',
            'army_date_end',
            'army_place',
            'army_status',
            'last_uzb_address',
            'doc_left_type',
            'doc_series',
            'doc_number',
            'doc_date',
            'doc_bywhom',
            'citizenship_take_id',
            'reason_not_take',
            'relatives_uzb_id',
            'relatives_abroad_id',
            'last_work_uzb',
            'address',
            'tel',
            'email:email',
            'passport_series',
            'passport_number',
            'cur_date',
            'children_id',
        ],
    ]) ?>

</div>
