<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use backend\models\SpNationyii;
use backend\models\SpMaritalyii;
use yii\helpers\ArrayHelper;
use backend\models\SpCountryyii;
use backend\models\SpDivisionyii;
use backend\models\Status;
use kartik\select2\Select2;
use backend\models\Education;
use backend\models\TypeRelative;
use yii\captcha\Captcha;


/* @var $this yii\web\View */
/* @var $model backend\models\Citizenship */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= Yii::t('app', 'O`zbekiston Respublikasi fuqaroligidan chiqish uchun to`ldirilgan anketa'); ?></b></h3></br>
    <div class="pmj-form">
        <?php $form = ActiveForm::begin(); ?>
            <div class="paddingless">
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs row text-center">
                            <li class="active" style="width: 12.3%;">
                                <a href="#tab_1_1" data-toggle="tab">
                                    <i class="fa fa-user fa-3x media-imgs"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_2" data-toggle="tab">
                                    <i class="fa fa-newspaper-o fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_3" data-toggle="tab">
                                    <i class="fa fa-info fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_4" data-toggle="tab">
                                    <i class="fa fa-users fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_5" data-toggle="tab">
                                    <i class="fa fa-users fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_6" data-toggle="tab">
                                    <i class="fa fa-child fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_7" data-toggle="tab">
                                    <i class="fa fa-file-text-o fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_8" data-toggle="tab">
                                    <i class="fa fa-comment fa-3x"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="scroller" data-always-visible="1" data-rail-visible="0">
                                    <h3 class="step-txt5"><?= Yii::t('app', 'Asosiy ma\'lumotlar'); ?></h3>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'pre_surname')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'pre_name')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'pre_mname')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'birth_date')
                                                ->widget(DatePicker::classname(), [
                                                'language' => 'ru',
                                                'pluginOptions' => [
                                                'format' => 'yyyy-mm-dd',
                                                'autoclose'=>true,
                                                'todayHighlight' => true
                                                ],
                                                ]);
                                            ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'nationality_id')->dropDownList(
                                              ArrayHelper::map(SpNationyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                              ['prompt'=>Yii::t('app', 'Millatni tanlang')]
                                            ) ?>
                                        </div>                                      
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'study_id')->dropDownList(
                                                ArrayHelper::map(Education::find()->all(), 'id', Yii::$app->language.'_type_edu'),
                                                ['prompt'=>Yii::t('app', 'Ma`lumotni tanlang')]
                                            ) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'profession')->textInput() ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'social_status')->textInput() ?>                        
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'marital_id')->dropDownList(
                                                ArrayHelper::map(SpMaritalyii::find()->all(), 'id','sp_name_'.Yii::$app->language),
                                                ['prompt'=>Yii::t('app', 'Oilaviy holatini tanlang')]
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'marital_name')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'marital_bdate')->widget(DatePicker::classname(), [
                                                'language' => 'ru',
                                                'pluginOptions' => [
                                                'format' => 'yyyy-mm-dd',
                                                'autoclose'=>true,
                                                'todayHighlight' => true
                                                ],
                                              ]);
                                            ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'marital_nation')->dropDownList(
                                                ArrayHelper::map(SpCountryyii::find()->all(), 'id','sp_name_'.Yii::$app->language),
                                                ['prompt'=>Yii::t('app', 'Fuqaroligini tanlang')]
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'marital_place')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'mail')->input('email');?>
                                        </div>                                       
                                    </div>                               
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_2">
                                <div class="scroller"  data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt5"><?= Yii::t('app', 'Qo`shimcha ma`lumotlar'); ?></h3> 
                                    <div class="row">
                                        <div class="form-group col-sm-12">                    
                                            <?= $form->field($model, 'court')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'army')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'army_now')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'medal')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'pmj')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_3">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                     <h3 class="step-txt5"><?= Yii::t('app', 'Qo`shimcha ma`lumotlar'); ?></h3>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'last_place')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'visit_uzb')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'business')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'citizenship_id')->dropDownList(
                                                ArrayHelper::map(SpCountryyii::find()->all(), 'id','sp_name_'.Yii::$app->language),
                                                ['prompt'=>Yii::t('app', 'Fuqarolikni tanlang')]
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'cause')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'living_place')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'division_id')->dropDownList(
                                                ArrayHelper::map(SpDivisionyii::find()->where(['sp_idfirst' => 1])->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                                ['prompt'=>Yii::t('app', 'Diplomatik vakolatxonani tanlang')]
                                            ) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_4">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt5"><?= Yii::t('app', 'O`zbekiston Respublikasida yashayotgan yaqin qarindoshlari' ); ?></h3>                                    
                                    <?php
                                        $Inrelatives = $model->inrelative;
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN SAMPLE TABLE PORTLET-->                     
                                            <div class="portlet-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-bordered table-advance table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'F.I.Sh.' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Qarindoshlik aloqadorligi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Tug`ilgan vaqti va joyi' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Millati' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Fuqaroligi' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Ish joyi, mutaxassisligi' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Yashash joyi manzili' ); ?>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <?php $typeRelative = Yii::$app->language._type_relative; 
                                                        $lang = sp_name_.Yii::$app->language; ?>
                                                        <?php foreach ($Inrelatives as $key => $inrelative): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>          
                                                                    <?= $inrelative->fio ?> 
                                                                </td>
                                                                <td>
                                                                    <?= $inrelative->typeRelative->$typeRelative ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $inrelative->birth_date ?> <?= $inrelative->birth_place ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $inrelative->spNation->$lang ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $inrelative->spCountry->$lang ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $inrelative->work ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $inrelative->living_place ?>
                                                                </td> 
                                                            </tr>
                                                        </tbody>
                                                        <?php endforeach ?>
                                                    </table>
                                                </div>
                                            </div>                                                
                                            <!-- END SAMPLE TABLE PORTLET-->
                                        </div>  
                                    </div>                                  
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_5">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt5"><?= Yii::t('app', 'O`zbekiston Respublikasi hududidan tashqarida istiqomat qiluvchi yaqin qarindoshlari' ); ?></h3>
                                    <?php
                                        $Outrelatives = $model->outrelative;
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN SAMPLE TABLE PORTLET-->                     
                                            <div class="portlet-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-bordered table-advance table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'F.I.Sh.' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Qarindoshlik aloqadorligi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Tug`ilgan vaqti va joyi' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Millati' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Fuqaroligi' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Ish joyi, mutaxassisligi' ); ?>
                                                                </th>
                                                                  <th class="text-center">
                                                                    <?= Yii::t('app', 'Yashash joyi manzili' ); ?>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <?php foreach ($Outrelatives as $key => $outrelative): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>          
                                                                    <?= $outrelative->fio ?> 
                                                                </td>
                                                                <td>
                                                                    <?= $outrelative->typeRelative->$typeRelative ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $outrelative->birth_date ?> <?= $outrelative->birth_place ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $outrelative->spNation->$lang ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $outrelative->spCountry->$lang ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $outrelative->work ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $outrelative->living_place ?>
                                                                </td> 
                                                            </tr>
                                                        </tbody>
                                                        <?php endforeach ?>
                                                    </table>
                                                </div>
                                            </div>                                                
                                            <!-- END SAMPLE TABLE PORTLET-->
                                        </div>  
                                    </div>                       
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_6">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt6"><?= Yii::t('app', 'Balog`at yoshiga yetmagan shahslar bilan fuqarolikdan chiqish' ); ?></h3>
                                    <?php
                                        $Childrens = $model->children;
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN SAMPLE TABLE PORTLET-->                     
                                            <div class="portlet-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-bordered table-advance table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'F.I.Sh.' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Tug`ilgan vaqti' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Qarindoshlik aloqadorligi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Izoh' ); ?>
                                                                </th>
                                                            </tr>
                                                            </tr>
                                                        </thead>
                                                        <?php foreach ($Childrens as $key => $children): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>          
                                                                    <?= $children->fio ?>
                                                                </td>
                                                                <td>
                                                                    <?= $children->birth_date ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $children->typeRelative->$typeRelative ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $children->comment ?>
                                                                </td> 
                                                            </tr>
                                                        </tbody>
                                                        <?php endforeach ?>
                                                    </table>
                                                </div>
                                            </div>                                                
                                            <!-- END SAMPLE TABLE PORTLET-->
                                        </div>  
                                    </div>                       
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_7">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt7"><?= Yii::t('app', 'Hujjatlar nusxasi' ); ?></h3>
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <h4><?= Yii::t('app', 'Rasm' ); ?></h4>              
                                            <img src="/uploads/<?= $model->photo;?>" style="width: 200px;">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <h4><?= Yii::t('app', 'Ariza nusxasi' ); ?></h4>  
                                            <img src="/uploads/<?= $model->file1;?>" style="width: 200px;">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <h4><?= Yii::t('app', 'Tarjimai hol nusxasi' ); ?></h4>  
                                            <img src="/uploads/<?= $model->file2;?>" style="width: 200px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <h4><?= Yii::t('app', 'O`zbekiston pasporti sahifalaridan nusxa' ); ?></h4>  
                                            <img src="/uploads/<?= $model->file3;?>" style="width: 200px;">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <h4><?= Yii::t('app', 'Fuqarolikdan chiqishiga turmush o`rtog`ining roziligi nusxasi' ); ?></h4>  
                                            <img src="/uploads/<?= $model->file4;?>" style="width: 200px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_8">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt7"><?= Yii::t('app', 'Sharh' ); ?></h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?= $form->field($model, 'status_id')->dropDownList(
                                                ArrayHelper::map(Status::find()->all(), 'id','name_'.Yii::$app->language),
                                                ['prompt'=>Yii::t('app', 'Fuqarolikni tanlang')]
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?= $form->field($model, 'comment')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END TABS-->
                </div>
            </div>              
            <div class="row">               
                <div class="col-sm-12">                  
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Qo`shish') : Yii::t('app', 'Yangilash'), ['class' => $model->isNewRecord ? 'btn btn-success col-sm-12' : 'btn btn-primary col-sm-12'] ) ?>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php
$this->registerJs("$(document).ready(function($){

    step=1; 
       
       
 $('.nav-tabs > li > a').click(function() { 
            if($(this).hasClass('disabled')) {
            return false;
        } else {
            var linkIndex = $(this).parent().index();
            $('.nav-tabs > li').each(function(index, item) {  
                $(item).attr('rel-index', index - linkIndex+1);
                                }); 
     step= linkIndex; 
            }
});
})");
?> 