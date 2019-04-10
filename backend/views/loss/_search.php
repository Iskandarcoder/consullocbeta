<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LossSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loss-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'guide') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'mname') ?>

    <?php // echo $form->field($model, 'pre_mname') ?>

    <?php // echo $form->field($model, 'living_place') ?>

    <?php // echo $form->field($model, 'cause_id') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'birt_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'citizenship_id') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'education_id') ?>

    <?php // echo $form->field($model, 'court') ?>

    <?php // echo $form->field($model, 'marital_id') ?>

    <?php // echo $form->field($model, 'wedding_date') ?>

    <?php // echo $form->field($model, 'marital_fio') ?>

    <?php // echo $form->field($model, 'marital_bdate') ?>

    <?php // echo $form->field($model, 'last_place') ?>

    <?php // echo $form->field($model, 'pmj_id') ?>

    <?php // echo $form->field($model, 'enter_date') ?>

    <?php // echo $form->field($model, 'passport') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'division_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
