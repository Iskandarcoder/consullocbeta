<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ngraj */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ngraj-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'guide')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pre_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pre_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pre_mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nation_id')->textInput() ?>

    <?= $form->field($model, 'marital_status_id')->textInput() ?>

    <?= $form->field($model, 'consent_other_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conviction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conviction_date')->textInput() ?>

    <?= $form->field($model, 'conviction_bywhom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conviction_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'army')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'army_branch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'army_date_start')->textInput() ?>

    <?= $form->field($model, 'army_date_end')->textInput() ?>

    <?= $form->field($model, 'army_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'army_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_uzb_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_left_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_series')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doc_number')->textInput() ?>

    <?= $form->field($model, 'doc_date')->textInput() ?>

    <?= $form->field($model, 'doc_bywhom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'citizenship_take_id')->textInput() ?>

    <?= $form->field($model, 'reason_not_take')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relatives_uzb_id')->textInput() ?>

    <?= $form->field($model, 'relatives_abroad_id')->textInput() ?>

    <?= $form->field($model, 'last_work_uzb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_series')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_number')->textInput() ?>

    <?= $form->field($model, 'cur_date')->textInput() ?>

    <?= $form->field($model, 'children_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
