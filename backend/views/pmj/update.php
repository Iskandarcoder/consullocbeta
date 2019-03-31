<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmj */
$lang = Yii::$app->language;

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Pmj',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pmjs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pmj-update">
    <?= $this->render('_form', [
        'model' => $model,
        'employment' => $employment,
        'relative' => $relative,
        'teenager' => $teenager,
    ]) ?>
</div>
