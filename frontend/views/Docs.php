<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Docs */
/* @var $form ActiveForm */
?>
<div class="Docs">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'surname') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'mname') ?>
        <?= $form->field($model, 'birth_date') ?>
        <?= $form->field($model, 'birth_place') ?>
        <?= $form->field($model, 'nation_id') ?>
        <?= $form->field($model, 'citizenship_id') ?>
        <?= $form->field($model, 'type_id') ?>
        <?= $form->field($model, 'doc_target') ?>
        <?= $form->field($model, 'living_place') ?>
        <?= $form->field($model, 'tel') ?>
        <?= $form->field($model, 'fax') ?>
        <?= $form->field($model, 'scan_file') ?>
        <?= $form->field($model, 'division_id') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'type_date') ?>
        <?= $form->field($model, 'study_start_date') ?>
        <?= $form->field($model, 'study_end_date') ?>
        <?= $form->field($model, 'pension_date') ?>
        <?= $form->field($model, 'sec_birthdate') ?>
        <?= $form->field($model, 'sec_tel') ?>
        <?= $form->field($model, 'sec_fax') ?>
        <?= $form->field($model, 'status_id') ?>
        <?= $form->field($model, 'file') ?>
        <?= $form->field($model, 'pre_surname') ?>
        <?= $form->field($model, 'pre_name') ?>
        <?= $form->field($model, 'pre_mname') ?>
        <?= $form->field($model, 'pre_citizenship_id') ?>
        <?= $form->field($model, 'sec_citizenship_id') ?>
        <?= $form->field($model, 'fio_father') ?>
        <?= $form->field($model, 'fio_mother') ?>
        <?= $form->field($model, 'study_name') ?>
        <?= $form->field($model, 'pension_reason') ?>
        <?= $form->field($model, 'pension_org') ?>
        <?= $form->field($model, 'last_cost') ?>
        <?= $form->field($model, 'last_cost_org') ?>
        <?= $form->field($model, 'sec_name') ?>
        <?= $form->field($model, 'sec_surname') ?>
        <?= $form->field($model, 'sec_mname') ?>
        <?= $form->field($model, 'relative') ?>
        <?= $form->field($model, 'type_place') ?>
        <?= $form->field($model, 'study_place') ?>
        <?= $form->field($model, 'sec_birthplace') ?>
        <?= $form->field($model, 'sec_livingplace') ?>
        <?= $form->field($model, 'comment') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Docs -->
