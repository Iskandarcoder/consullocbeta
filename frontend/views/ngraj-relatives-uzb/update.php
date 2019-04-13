<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NgrajRelativesUzb */

$this->title = Yii::t('app', 'Update Ngraj Relatives Uzb: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ngraj Relatives Uzbs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ngraj-relatives-uzb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
