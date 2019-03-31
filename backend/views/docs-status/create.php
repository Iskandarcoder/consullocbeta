<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DocsStatus */

$this->title = Yii::t('app', 'Create Docs Status');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Docs Statuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
