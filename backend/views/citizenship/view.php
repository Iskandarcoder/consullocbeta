<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizenship */
$lang = Yii::$app->language;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Citizenships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <div class="citizenship-view">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                //'guide',
                //'photo:ntext',
                'surname',
                'name',
                'mname',
                'pre_surname',
                'pre_name',
                'pre_mname',
                'social_status',
                'birth_date',
                [
                    'label' => Yii::t('app', 'Millati'),
                    'value' => $model->spNation->{'sp_name_'.$lang},
                ],
                [
                    'label' => Yii::t('app', 'Ma`lumoti'),
                    'value' => $model->education->{$lang.'_type_edu'},
                ],
                'profession',
                [
                    'label' => Yii::t('app', 'Oilaviy holati'),
                    'value' => $model->spMarital->{'sp_name_'.$lang},
                ],
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
                [
                    'label' => Yii::t('app', 'Qaysi davlat fuqaroligini olmoqchi'),
                    'value' => $model->spCountry->{'sp_name_'.$lang},
                ],
                'cause',
                'living_place',
                'tel',
                //'file1:ntext',
                //'file2:ntext',
                //'file3:ntext',
                //'file4:ntext',
                [
                    'label' => Yii::t('app', 'Holati'),
                    'value' => $model->status->{'name_'.$lang},
                ],
                'comment',
                //'division_id',
            ],
        ]) ?>
    </div>
</div>
