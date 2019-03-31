<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SpNation */

$this->title = Yii::t('app', 'Create Sp Nation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sp Nations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-nation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
