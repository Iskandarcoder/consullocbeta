<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizenship */

$this->title = 'Create Citizenship';
$this->params['breadcrumbs'][] = ['label' => 'Citizenships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citizenship-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modelInrelative' => $modelInrelative,
        'modelOutrelative' => $modelOutrelative,
        'modelChildren' => $modelChildren,
    ]) ?>

</div>
