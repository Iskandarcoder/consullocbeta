<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SpNation */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sp Nation',
]) . $model->sp_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Nations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sp_id, 'url' => ['view', 'id' => $model->sp_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sp-nation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
