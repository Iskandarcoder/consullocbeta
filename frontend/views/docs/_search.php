<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DocsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="docs-search">

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

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'nation_id') ?>

    <?php // echo $form->field($model, 'citizenship_id') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'type_place') ?>

    <?php // echo $form->field($model, 'type_date') ?>

    <?php // echo $form->field($model, 'fio_father') ?>

    <?php // echo $form->field($model, 'fio_mother') ?>

    <?php // echo $form->field($model, 'study_name') ?>

    <?php // echo $form->field($model, 'study_place') ?>

    <?php // echo $form->field($model, 'study_start_date') ?>

    <?php // echo $form->field($model, 'study_end_date') ?>

    <?php // echo $form->field($model, 'pension_reason') ?>

    <?php // echo $form->field($model, 'pension_date') ?>

    <?php // echo $form->field($model, 'pension_org') ?>

    <?php // echo $form->field($model, 'last_cost') ?>

    <?php // echo $form->field($model, 'last_cost_org') ?>

    <?php // echo $form->field($model, 'doc_target') ?>

    <?php // echo $form->field($model, 'living_place') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'sec_name') ?>

    <?php // echo $form->field($model, 'sec_surname') ?>

    <?php // echo $form->field($model, 'sec_mname') ?>

    <?php // echo $form->field($model, 'sec_birthplace') ?>

    <?php // echo $form->field($model, 'sec_birthdate') ?>

    <?php // echo $form->field($model, 'sec_citizenship_id') ?>

    <?php // echo $form->field($model, 'relative') ?>

    <?php // echo $form->field($model, 'sec_livingplace') ?>

    <?php // echo $form->field($model, 'sec_tel') ?>

    <?php // echo $form->field($model, 'sec_fax') ?>

    <?php // echo $form->field($model, 'scan_file') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'pre_citizenship_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
