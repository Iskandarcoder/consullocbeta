<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CitizenshipSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citizenship-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'guide') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'mname') ?>

    <?php // echo $form->field($model, 'pre_surname') ?>

    <?php // echo $form->field($model, 'pre_name') ?>

    <?php // echo $form->field($model, 'pre_mname') ?>

    <?php // echo $form->field($model, 'social_status') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'study_id') ?>

    <?php // echo $form->field($model, 'profession') ?>

    <?php // echo $form->field($model, 'marital_id') ?>

    <?php // echo $form->field($model, 'marital_name') ?>

    <?php // echo $form->field($model, 'marital_bdate') ?>

    <?php // echo $form->field($model, 'marital_nation') ?>

    <?php // echo $form->field($model, 'marital_place') ?>

    <?php // echo $form->field($model, 'court') ?>

    <?php // echo $form->field($model, 'army') ?>

    <?php // echo $form->field($model, 'army_now') ?>

    <?php // echo $form->field($model, 'medal') ?>

    <?php // echo $form->field($model, 'pmj') ?>

    <?php // echo $form->field($model, 'last_place') ?>

    <?php // echo $form->field($model, 'visit_uzb') ?>

    <?php // echo $form->field($model, 'business') ?>

    <?php // echo $form->field($model, 'citizenship_id') ?>

    <?php // echo $form->field($model, 'cause') ?>

    <?php // echo $form->field($model, 'living_place') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'file1') ?>

    <?php // echo $form->field($model, 'file2') ?>

    <?php // echo $form->field($model, 'file3') ?>

    <?php // echo $form->field($model, 'file4') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'division_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
