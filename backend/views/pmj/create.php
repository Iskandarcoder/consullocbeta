<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pmj */

$this->title = Yii::t('app', 'Create Pmj');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pmjs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
