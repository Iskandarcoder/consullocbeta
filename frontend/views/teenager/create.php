<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Teenager */

$this->title = Yii::t('app', 'Create Teenager');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Teenagers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teenager-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
