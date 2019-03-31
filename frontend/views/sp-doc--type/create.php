<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpDoc_Type */

$this->title = Yii::t('app', 'Create Sp Doc  Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Doc  Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-doc--type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
