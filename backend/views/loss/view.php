<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Loss */
$lang = Yii::$app->language;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Losses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <div class="loss-view"> 
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [                
                'surname',
                'name',
                'mname',
                'pre_mname',
                'living_place',
                 [
                    'label' => Yii::t('app', 'Fuqarolikni yo`qotganiga sabab'),
                    'value' => $model->cause->{'name_'.$lang},
                ],
                'tel',
                'mail',
                'country_id',
                'date',
                'city',
                'birt_date',
                'birth_place',
                 [
                    'label' => Yii::t('app', 'Fuqaroligi'),
                    'value' => $model->spCountry->{'sp_name_'.$lang},
                ],
                 [
                    'label' => Yii::t('app', 'Millati'),
                    'value' => $model->spNation->{'sp_name_'.$lang},
                ],
                 [
                    'label' => Yii::t('app', 'Ma`lumoti'),
                    'value' => $model->education->{$lang.'_type_edu'},
                ],
                'court',
                 [
                    'label' => Yii::t('app', 'Oilaviy holati'),
                    'value' => $model->spMarital->{'sp_name_'.$lang},
                ],
                'wedding_date',
                'marital_fio',
                'marital_bdate',
                'last_place',
                 [
                    'label' => Yii::t('app', 'Doimiy ro`yhatga chiqqan mamlakat'),
                    'value' => $model->spCountry2->{'sp_name_'.$lang},
                ],
                'enter_date',
                 [
                    'label' => Yii::t('app', 'Holati'),
                    'value' => $model->status->{'name_'.$lang},
                ],
                'comment',
            ],
        ]) ?>
    </div>
</div>
