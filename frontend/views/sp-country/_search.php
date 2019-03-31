<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SpCountrySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sp-country-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sp_id') ?>

    <?= $form->field($model, 'sp_name_cryl') ?>

    <?= $form->field($model, 'sp_name_ru') ?>

    <?= $form->field($model, 'sp_name_qrc') ?>

    <?= $form->field($model, 'sp_name_en') ?>

    <?php // echo $form->field($model, 'sp_name_uz') ?>

    <?php // echo $form->field($model, 'sp_name_qrl') ?>

    <?php // echo $form->field($model, 'sp_idn') ?>

    <?php // echo $form->field($model, 'sp_active') ?>

    <?php // echo $form->field($model, 'sp_dateenter') ?>

    <?php // echo $form->field($model, 'sp_scn') ?>

    <?php // echo $form->field($model, 'sp_idold') ?>

    <?php // echo $form->field($model, 'sp_idnold') ?>

    <?php // echo $form->field($model, 'sp_idfirst') ?>

    <?php // echo $form->field($model, 'sp_idnfirst') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
