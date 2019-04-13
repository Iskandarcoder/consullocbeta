<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NgrajRelativesAbroad */

$this->title = Yii::t('app', 'Create Ngraj Relatives Abroad');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ngraj Relatives Abroads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ngraj-relatives-abroad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
