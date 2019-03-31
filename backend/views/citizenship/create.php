<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizenship */

$this->title = 'Create Citizenship';
$this->params['breadcrumbs'][] = ['label' => 'Citizenships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citizenship-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
