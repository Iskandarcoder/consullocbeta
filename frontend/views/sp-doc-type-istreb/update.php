<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SpDoctypeIstreb */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sp Doc Type Istreb',
]) . $model->sp_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Doc  Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sp_id, 'url' => ['view', 'id' => $model->sp_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sp-doc-type-istreb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
