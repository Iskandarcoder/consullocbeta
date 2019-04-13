<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\NgrajSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ngraj-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'guide') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'pre_name') ?>

    <?= $form->field($model, 'surname') ?>

    <?php // echo $form->field($model, 'pre_surname') ?>

    <?php // echo $form->field($model, 'mname') ?>

    <?php // echo $form->field($model, 'pre_mname') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'nation_id') ?>

    <?php // echo $form->field($model, 'marital_status_id') ?>

    <?php // echo $form->field($model, 'consent_other_parent') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'conviction') ?>

    <?php // echo $form->field($model, 'conviction_date') ?>

    <?php // echo $form->field($model, 'conviction_bywhom') ?>

    <?php // echo $form->field($model, 'conviction_reason') ?>

    <?php // echo $form->field($model, 'army') ?>

    <?php // echo $form->field($model, 'army_branch') ?>

    <?php // echo $form->field($model, 'army_date_start') ?>

    <?php // echo $form->field($model, 'army_date_end') ?>

    <?php // echo $form->field($model, 'army_place') ?>

    <?php // echo $form->field($model, 'army_status') ?>

    <?php // echo $form->field($model, 'last_uzb_address') ?>

    <?php // echo $form->field($model, 'doc_left_type') ?>

    <?php // echo $form->field($model, 'doc_series') ?>

    <?php // echo $form->field($model, 'doc_number') ?>

    <?php // echo $form->field($model, 'doc_date') ?>

    <?php // echo $form->field($model, 'doc_bywhom') ?>

    <?php // echo $form->field($model, 'citizenship_take_id') ?>

    <?php // echo $form->field($model, 'reason_not_take') ?>

    <?php // echo $form->field($model, 'relatives_uzb_id') ?>

    <?php // echo $form->field($model, 'relatives_abroad_id') ?>

    <?php // echo $form->field($model, 'last_work_uzb') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'passport_series') ?>

    <?php // echo $form->field($model, 'passport_number') ?>

    <?php // echo $form->field($model, 'cur_date') ?>

    <?php // echo $form->field($model, 'children_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
