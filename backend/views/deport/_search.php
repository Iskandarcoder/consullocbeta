<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DeportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deport-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'division_id') ?>

    <?= $form->field($model, 'pinpp') ?>

    <?= $form->field($model, 'surname_cyrillic') ?>

    <?= $form->field($model, 'name_cyrillic') ?>

    <?php // echo $form->field($model, 'patronym_cyrillic') ?>

    <?php // echo $form->field($model, 'surname_latin') ?>

    <?php // echo $form->field($model, 'name_latin') ?>

    <?php // echo $form->field($model, 'patronym_latin') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'sex_id') ?>

    <?php // echo $form->field($model, 'nationality_id') ?>

    <?php // echo $form->field($model, 'marital_status_id') ?>

    <?php // echo $form->field($model, 'birth_country_id') ?>

    <?php // echo $form->field($model, 'birth_region_id') ?>

    <?php // echo $form->field($model, 'birth_district_id') ?>

    <?php // echo $form->field($model, 'birth_place_id') ?>

    <?php // echo $form->field($model, 'birth_place_latin') ?>

    <?php // echo $form->field($model, 'document_type_id') ?>

    <?php // echo $form->field($model, 'doc_seria') ?>

    <?php // echo $form->field($model, 'doc_number') ?>

    <?php // echo $form->field($model, 'date_begin_document') ?>

    <?php // echo $form->field($model, 'date_end_document') ?>

    <?php // echo $form->field($model, 'document_div_id') ?>

    <?php // echo $form->field($model, 'document_div_place') ?>

    <?php // echo $form->field($model, 'living_country_id') ?>

    <?php // echo $form->field($model, 'living_region_id') ?>

    <?php // echo $form->field($model, 'living_district_id') ?>

    <?php // echo $form->field($model, 'living_place_id') ?>

    <?php // echo $form->field($model, 'living_street_id') ?>

    <?php // echo $form->field($model, 'living_block') ?>

    <?php // echo $form->field($model, 'living_house') ?>

    <?php // echo $form->field($model, 'living_flat') ?>

    <?php // echo $form->field($model, 'arrival_country_id') ?>

    <?php // echo $form->field($model, 'living_foreign_place') ?>

    <?php // echo $form->field($model, 'offense_article') ?>

    <?php // echo $form->field($model, 'offense_id') ?>

    <?php // echo $form->field($model, 'penalty_id') ?>

    <?php // echo $form->field($model, 'deport_date') ?>

    <?php // echo $form->field($model, 'deport_route') ?>

    <?php // echo $form->field($model, 'creation_date') ?>

    <?php // echo $form->field($model, 'living_uzb_place') ?>

    <?php // echo $form->field($model, 'add_info') ?>

    <?php // echo $form->field($model, 'Send_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
