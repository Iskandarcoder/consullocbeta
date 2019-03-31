<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizenship */

$this->title = 'Update Citizenship: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Citizenships', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="citizenship-update">  
    <?= $this->render('_form', [
        'model' => $model,
        'modelInrelative' => $modelInrelative,
        'modelOutrelative' => $modelOutrelative,
        'modelChildren' => $modelChildren,
    ]) ?>

</div>
