<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NgrajChildren */

$this->title = Yii::t('app', 'Create Ngraj Children');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ngraj Childrens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ngraj-children-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
