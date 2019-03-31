<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpDivision */

$this->title = Yii::t('app', 'Create Sp Division');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Divisions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-division-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
