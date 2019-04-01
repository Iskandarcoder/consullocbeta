<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpDoctypeIstreb */

$this->title = Yii::t('app', 'Create Sp Doc Type Istreb');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Doc Type Istrebs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-doc-type-istreb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
