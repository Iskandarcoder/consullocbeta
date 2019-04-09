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

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
