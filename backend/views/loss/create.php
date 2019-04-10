<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Loss */

$this->title = 'Create Loss';
$this->params['breadcrumbs'][] = ['label' => 'Losses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
