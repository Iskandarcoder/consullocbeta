<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Employment */

$this->title = Yii::t('app', 'Create Employment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
