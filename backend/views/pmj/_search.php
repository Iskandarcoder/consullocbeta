<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PmjSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pmj-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'mname') ?>

    <?= $form->field($model, 'pre_surname') ?>

    <?php // echo $form->field($model, 'pre_name') ?>

    <?php // echo $form->field($model, 'pre_mname') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'photo1') ?>

    <?php // echo $form->field($model, 'photo2') ?>

    <?php // echo $form->field($model, 'photo3') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'living_place') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'citizenship_id') ?>

    <?php // echo $form->field($model, 'second_cityzenship_id') ?>

    <?php // echo $form->field($model, 'seria_pasp') ?>

    <?php // echo $form->field($model, 'numb_pasp') ?>

    <?php // echo $form->field($model, 'pasp_date') ?>

    <?php // echo $form->field($model, 'pasp_place') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'security') ?>

    <?php // echo $form->field($model, 'law_court') ?>

    <?php // echo $form->field($model, 'criminal') ?>

    <?php // echo $form->field($model, 'army') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'division_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
