<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Usluga */

$this->title = Yii::t('app', 'Create Usluga');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Uslugas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usluga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
