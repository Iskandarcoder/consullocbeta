<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SpCountry */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sp Country',
]) . $model->sp_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sp_id, 'url' => ['view', 'id' => $model->sp_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sp-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
