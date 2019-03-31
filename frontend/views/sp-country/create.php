<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpCountry */

$this->title = Yii::t('app', 'Create Sp Country');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
