<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NgrajRelativesUzb */

$this->title = Yii::t('app', 'Create Ngraj Relatives Uzb');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ngraj Relatives Uzbs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ngraj-relatives-uzb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
