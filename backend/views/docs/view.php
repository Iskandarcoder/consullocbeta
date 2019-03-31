<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
// use backend\models\spNationyii;

/* @var $this yii\web\View */
/* @var $model backend\models\Docs */
$lang = Yii::$app->language;

$this->title = Yii::t('app', 'Ko\'rish'); 
$this->params['breadcrumbs'][] = ['label' => 'Docs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="docs-view">

    <div class="well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= $model->surname. ' ' .$model->name. ' ' .$model->mname?></b></h3></br>

    <p>
        <?= Html::a(Yii::t('app', 'Yangilash'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'O\'chirish'), ['delete', 'id' => $model->id], [
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
            // 'id',
            'surname',
            'name',
            'mname',
            // 'pre_surname',
            // 'pre_name',
            // 'pre_mname',
            'birth_date',
            'birth_place',
            // 'nation_id',
            [
                    'label' => Yii::t('app', 'Millati'),
                    'value' => $model->spNation->sp_name_uz,
            ],
            'citizenship_id',
            // 'pre_citizenship_id',
            [
                    'label' => Yii::t('app', 'Talab qilinayotgan hujjat turi'),
                    'value' => $model->spDoc_type->sp_name_uz,
            ],
            // 'type_id',
            'type_place',
            'type_date',
            'fio_father',
            'fio_mother',
            'study_name',
            'study_place',
            'study_start_date',
            'study_end_date',
            'pension_reason',
            'pension_date',
            'pension_org',
            'last_cost',
            'last_cost_org',
            'doc_target',
            'living_place',
            'tel',
            'fax',
            'sec_name',
            'sec_surname',
            'sec_mname',
            'sec_birthplace',
            'sec_birthdate',
            'sec_citizenship_id',
            'relative',
            'sec_livingplace',
            'sec_tel',
            'sec_fax',
            // 'scan_file:ntext',
            [
                    'label' => Yii::t('app', 'Holati'),
                    'value' => $model->docsStatus->name,
            ],
            // 'status_id',
            'email:email',
            // 'division_id',
            'comment',
        ],
    ]) ?>

</div>
