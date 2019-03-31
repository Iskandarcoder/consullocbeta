<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SpDivisionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sp-division-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'sp_id') ?>

    <?= $form->field($model, 'sp_name_cryl') ?>

    <?= $form->field($model, 'sp_name_ru') ?>

    <?= $form->field($model, 'sp_name_qrc') ?>

    <?= $form->field($model, 'sp_name_en') ?>

    <?php // echo $form->field($model, 'sp_name_uz') ?>

    <?php // echo $form->field($model, 'sp_name_qrl') ?>
=======
    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sp_id') ?>

    <?= $form->field($model, 'KODST_ZU') ?>

    <?= $form->field($model, 'sp_name00') ?>

    <?= $form->field($model, 'sp_name01') ?>

    <?php // echo $form->field($model, 'sp_name02') ?>

    <?php // echo $form->field($model, 'sp_name03') ?>

    <?php // echo $form->field($model, 'sp_name04') ?>

    <?php // echo $form->field($model, 'sp_name05') ?>
>>>>>>> aa4b3562e521a8ba62c133b5d1d8a9ab9a50952b

    <?php // echo $form->field($model, 'sp_country') ?>

    <?php // echo $form->field($model, 'sp_region') ?>

    <?php // echo $form->field($model, 'sp_district') ?>

    <?php // echo $form->field($model, 'sp_level') ?>

    <?php // echo $form->field($model, 'sp_code') ?>

    <?php // echo $form->field($model, 'sp_isbio') ?>

    <?php // echo $form->field($model, 'sp_active') ?>

    <?php // echo $form->field($model, 'sp_dateenter') ?>

    <?php // echo $form->field($model, 'sp_scn') ?>

    <?php // echo $form->field($model, 'sp_idold') ?>

    <?php // echo $form->field($model, 'sp_idfirst') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
