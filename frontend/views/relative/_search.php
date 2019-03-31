<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RelativeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relative-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pmj_id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'relative') ?>

    <?= $form->field($model, 'birth') ?>

    <?php // echo $form->field($model, 'work') ?>

    <?php // echo $form->field($model, 'adres') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
