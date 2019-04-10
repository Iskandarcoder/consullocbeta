<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Loss */

$this->title = 'Update Loss: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Losses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loss-update">

    <?= $this->render('_form', [
        'model' => $model,
        'modelFamily' => $modelFamily,
        'modelLabor' => $modelLabor,
    ]) ?>

</div>
