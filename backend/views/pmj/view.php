<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmj */

$lang = Yii::$app->language;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pmjs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <div class="pmj-view">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'surname',
                'name',
                'mname',
                'pre_surname',
                'pre_name',
                'pre_mname',
                [
                    'label' => Yii::t('app', 'Millati'),
                    'value' => $model->spNation->{'sp_name_'.$lang},
                ],
                'birth_date',
                'birth_place',
                'living_place',
                'tel',
                [
                    'label' => Yii::t('app', 'Fuqaroligi'),
                    'value' => $model->spNation->{'sp_name_'.$lang},
                ],
                [
                    'label' => Yii::t('app', 'Agar bir vaqtda boshqa davlat fuqaroligiga ega bo\'lsa'),
                    'value' => $model->spNation->{'sp_name_'.$lang},
                ],
                'seria_pasp',
                'numb_pasp',
                'pasp_date',
                'pasp_place',
                'reason',
                'security',
                'law_court',
                'criminal',
                'army',
                [
                    'label' => Yii::t('app', 'Holati'),
                    'value' => $model->status->{'name_'.$lang},
                ],
                //'division_id',
            ],
        ]) ?>
    </div>
</div>
