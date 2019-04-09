<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\captcha\Captcha;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\select2\Select2;
use backend\models\SpNationyii;
use backend\models\SpCountryyii;
use backend\models\SpDivisionyii;
use backend\models\SpMaritalyii;
use backend\models\Cause;
use backend\models\Education;
use backend\models\TypeRelative;





/* @var $this yii\web\View */
/* @var $model backend\models\Loss */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= Yii::t('app', 'Fuqarolikni yo`qotish'); ?></b></h3></br><br/>
    <div class="board">
        <ul class="nav nav-tabs li6">
            <div class="liner6"></div>
            <li rel-index="0"  class="active">
                <a  id="s1" href="#step-1" class="btn media-links" aria-controls="step-1" role="tab" data-toggle="tab">
                    <span><i class="fa fa-user media-imgs"></i></span>
                </a>
            </li>
            <li rel-index="1">
                <a  id="s2" href="#step-2" class="btn disabled" aria-controls="step-2" role="tab" data-toggle="tab">
                    <span><i class="fa fa-vcard-o"></i></span>
                </a>
            </li>
            <li  rel-index="2">
                <a  id="s3" href="#step-3" class="btn disabled" aria-controls="step-3" role="tab" data-toggle="tab">
                    <span><i class="fa fa-question-circle-o"></i></span>
                </a>
            </li>
            <li rel-index="3">
                <a  id="s4" href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                    <span><i class="fa fa-users"></i></span>
                </a>
            </li>
            <li rel-index="4">
                <a  id="s5" href="#step-5" class="btn disabled" aria-controls="step-5" role="tab" data-toggle="tab">
                    <span><i class="fa fa-briefcase"></i></span>
                </a>
            </li>
            <li rel-index="5">
                <a  id="s6" href="#step-6" class="btn disabled" aria-controls="step-6" role="tab" data-toggle="tab">
                    <span><i class="fa fa-file"></i></span>
                </a>
            </li>  
        </ul>
    </div>
    </br>
    </br>
    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
        <div class="tab-content">
            <div  class="tab-pane active" id="step-1">
                <h3 class="step-txt1"><?= Yii::t('app', 'Asosiy ma\'lumotlar'); ?></h3>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'pre_mname')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>
                     </div>
                </div>
                <div class="row">                   
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'birt_date')->widget(DatePicker::classname(), [
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
                        <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>  
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'nationality_id')->dropDownList(
                          ArrayHelper::map(SpNationyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                          ['prompt'=>Yii::t('app', 'Millatni tanlang')]
                        ) ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'citizenship_id')->dropDownList(
                          ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                          ['prompt'=>Yii::t('app', 'Fuqarolikni tanlang')]
                        ) ?>
                    </div>
                </div>  
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                
            </div>
            <div  class="tab-pane" id="step-2">
                <h3 class="step-txt1"><?= Yii::t('app', 'Qo`shimcha ma`lumotlar'); ?></h3>                              
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'pmj_id')->dropDownList(
                          ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                          ['prompt'=>Yii::t('app', 'Mamlakatni tanlang')]
                        ) ?>
                    </div>   
                    <div class="form-group col-sm-6">  
                        <?= $form->field($model, 'enter_date')->widget(DatePicker::classname(), [
                          'language' => 'ru',
                          'pluginOptions' => [
                          'format' => 'yyyy-mm-dd',
                          'autoclose'=>true,
                          'todayHighlight' => true
                          ],
                          ]);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <?= $form->field($model, 'living_place')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <?= $form->field($model, 'last_place')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'education_id')->dropDownList(
                          ArrayHelper::map(Education::find()->all(), 'id', Yii::$app->language.'_type_edu'),
                          ['prompt'=>Yii::t('app', 'Ma`lumotni tanlang')]
                        ) ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'court')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'cause_id')->dropDownList(
                            ArrayHelper::map(Cause::find()->all(), 'id','name_'.Yii::$app->language),
                            ['prompt'=>Yii::t('app', 'Sababni tanlang')]
                        ) ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'country_id')->dropDownList(
                          ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                          ['prompt'=>Yii::t('app', 'Mamlakatni tanlang')]
                        ) ?>
                    </div>
                </div> 
            </div>
            <div  class="tab-pane" id="step-3">
                <h3 class="step-txt1"><?= Yii::t('app', 'Oilaviy holati'); ?></h3>
                <div class="row">                   
                    <div class="form-group col-sm-12">
                        <?= $form->field($model, 'marital_id')->dropDownList(
                          ArrayHelper::map(SpMaritalyii::find()->all(), 'id','sp_name_'.Yii::$app->language),
                          ['prompt'=>Yii::t('app', 'Oilaviy holatini tanlang')]
                        ) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'wedding_date')->textInput() ?>
                    </div>
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
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <?= $form->field($model, 'marital_fio')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>                
            </div>
            <div  class="tab-pane" id="step-4">
                <h3 class="step-txt1"><?= Yii::t('app', 'Yaqin qarindoshlari haqida ma`lumotlar'); ?></h3>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <div class="panel panel-default">              
                            <div class="panel-body" id="family">
                                <?php DynamicFormWidget::begin([
                                      'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                      'widgetBody' => '.container-items1', // required: css class selector
                                      'widgetItem' => '.item1', // required: css class
                                      'limit' => 5, // the maximum times, an element can be cloned (default 999)
                                      'min' => 1, // 0 or 1 (default 1)
                                      'insertButton' => '.add-item1', // css class
                                      'deleteButton' => '.remove-item1', // css class
                                      'model' => $modelFamily[0],
                                      'formId' => 'dynamic-form',
                                      'formFields' => [
                                      'fio',
                                      'relative',
                                      'birth_place',
                                      'birth_date',
                                      'citizenship_id',
                                      'nationality_id',
                                      'education_id',
                                      'court',
                                      'work',
                                      'address',
                                      'marital_id',
                                      ],
                                ]); ?>
                                    <div class="container-items1"><!-- widgetContainer -->
                                        <?php foreach ($modelFamily as $i => $modelfa): ?>
                                            <div class="item1 panel panel-default"><!-- widgetBody -->
                                                <div class="panel-heading">
                                                    <h3 class="panel-title pull-left"><i class="fa fa-user"></i> <?= Yii::t('app','Agar to\'ldirmoqchi bo\'lsangiz "+" tugmasini bosing!'); ?></h3>
                                                    <div class="pull-right">
                                                        <div class="col-sm-6" style="padding: 0 1px;margin-top: 2px">
                                                            <button type="button" class="add-item1 btn btn-success btn-xs" style="padding: 1px 8px!important; margin: 0">
                                                                <i class="glyphicon glyphicon-plus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-6" style="padding: 0 1px;margin-top: 2px">
                                                            <button type="button" class="remove-item1 btn btn-danger btn-xs"  style="padding: 1px 8px!important; margin: 0">
                                                                <i class="glyphicon glyphicon-minus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-body">
                                                    <?php
                                                    // necessary for update action.
                                                        if (!$modelfa->isNewRecord) {
                                                            echo Html::activeHiddenInput($modelfa, "[{$i}]id");
                                                        }
                                                    ?>
                                                    <?= $form->field($modelfa, "[{$i}]fio")->textInput(['maxlength' => true]) ?>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelfa, "[{$i}]relative")->dropDownList(
                                                              ArrayHelper::map(TypeRelative::find()->all(), 'id', Yii::$app->language.'_type_relative'),
                                                              ['prompt'=>Yii::t('app', 'Qarindoshlik darajasini tanlang')]
                                                            ) ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelfa, "[{$i}]marital_id")->dropDownList(
                                                              ArrayHelper::map(SpMaritalyii::find()->all(), 'id','sp_name_'.Yii::$app->language),
                                                              ['prompt'=>Yii::t('app', 'Oilaviy holatini tanlang')]
                                                            ) ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelfa, "[{$i}]education_id")->dropDownList(
                                                              ArrayHelper::map(Education::find()->all(), 'id', Yii::$app->language.'_type_edu'),
                                                              ['prompt'=>Yii::t('app', 'Ma`lumotni tanlang')]
                                                            ) ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelfa, "[{$i}]birth_date")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <?= $form->field($modelfa, "[{$i}]birth_place")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelfa, "[{$i}]nationality_id")->dropDownList(
                                                              ArrayHelper::map(SpNationyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                                              ['prompt'=>Yii::t('app', 'Millatni tanlang')]
                                                            ) ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelfa, "[{$i}]citizenship_id")->dropDownList(
                                                              ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                                              ['prompt'=>Yii::t('app', 'Fuqarolikni tanlang')]
                                                            ) ?>
                                                        </div>
                                                    </div>
                                                    <?= $form->field($modelfa, "[{$i}]court")->textInput(['maxlength' => true]) ?>
                                                    <?= $form->field($modelfa, "[{$i}]work")->textInput(['maxlength' => true]) ?>
                                                    <?= $form->field($modelfa, "[{$i}]address")->textInput(['maxlength' => true]) ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php DynamicFormWidget::end(); ?>
                            </div>
                        </div>                     
                    </div> 
                </div> 
            </div>
            <div  class="tab-pane" id="step-5">
                <h3 class="step-txt1"><?= Yii::t('app', 'Mehnat faoliyati'); ?></h3>
                <div class="row">  
                    <div class="form-group col-sm-12">
                        <div class="panel panel-default">             
                            <div class="panel-body" id="labor">
                                <?php DynamicFormWidget::begin([
                                      'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                      'widgetBody' => '.container-items2', // required: css class selector
                                      'widgetItem' => '.item2', // required: css class
                                      'limit' => 10, // the maximum times, an element can be cloned (default 999)
                                      'min' => 1, // 0 or 1 (default 1)
                                      'insertButton' => '.add-item2', // css class
                                      'deleteButton' => '.remove-item2', // css class
                                      'model' => $modelLabor[0],
                                      'formId' => 'dynamic-form',
                                      'formFields' => [
                                      'begin_date',
                                      'end_date',
                                      'work',
                                      ],
                                ]); ?>
                                    <div class="container-items2"><!-- widgetContainer -->
                                        <?php foreach ($modelLabor as $i => $modella): ?>
                                            <div class="item2 panel panel-default"><!-- widgetBody -->
                                                <div class="panel-heading">
                                                    <h3 class="panel-title pull-left"><i class="fa fa-user"></i> <?= Yii::t('app','Agar to\'ldirmoqchi bo\'lsangiz "+" tugmasini bosing!'); ?></h3>
                                                    <div class="pull-right">
                                                        <div class="col-sm-6" style="padding: 0 1px;margin-top: 2px">
                                                            <button type="button" class="add-item2 btn btn-success btn-xs" style="padding: 1px 8px!important; margin: 0">
                                                                <i class="glyphicon glyphicon-plus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-6" style="padding: 0 1px;margin-top: 2px">
                                                            <button type="button" class="remove-item2 btn btn-danger btn-xs" style="padding: 1px 8px!important; margin: 0">
                                                                <i class="glyphicon glyphicon-minus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-body">
                                                    <?php
                                                        // necessary for update action.
                                                        if (!$modella->isNewRecord) {
                                                            echo Html::activeHiddenInput($modella, "[{$i}]id");
                                                        }
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modella, "[{$i}]begin_date")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modella, "[{$i}]end_date")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                    </div>
                                                    <?= $form->field($modella, "[{$i}]work")->textInput(['maxlength' => true])
                                                    ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php DynamicFormWidget::end(); ?>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
            <div  class="tab-pane" id="step-6">
                <h3 class="step-txt1"><?= Yii::t('app', 'Hujjatlar nusxalari'); ?></h3>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'file')->widget(FileInput::classname(), [
                          'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'file1')->widget(FileInput::classname(), [
                          'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div> 
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                            'format' => 'yyyy-mm-dd',
                            'autoclose'=>true,
                            'todayHighlight' => true
                            ],
                            ]);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?= $form->field($model, "division_id")->dropDownList(
                          ArrayHelper::map(SpDivisionyii::find()->where(['sp_idfirst' => 1])->all(), 'sp_id','sp_name_'.Yii::$app->language),
                          ['prompt'=>Yii::t('app', 'Diplomatik vakolatxonani tanlang')]
                        ) ?>
                    </div>                                                        
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                          'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button id="back" class="btn btn-primary btn-lg" type="button" ><i class="fa fa-chevron-left"></i> <?= Yii::t('app', 'Orqaga'); ?></button>
                </div>
                <div class="col-sm-offset-4 col-sm-4">
                    <button id="next" class="btn btn-primary btn-lg" type="button" ><?= Yii::t('app', 'Keyingi'); ?> <i class="fa fa-chevron-right"></i></button>
                    <div id="send">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Qo`shish') : Yii::t('app', 'Yangilash'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg' : 'btn btn-primary'] ) ?>
                    </div>
                </div>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>
<?php
$this->registerJs("$(document).ready(function($){ 
    step=1; 
    $('#send').hide();
    $('#back').hide();
    $('#loss-country_id').parents('.form-group').hide();
    $('#loss-wedding_date').parents('.form-group').hide();
    $('#loss-marital_bdate').parents('.form-group').hide();      
    $('#loss-marital_fio').parents('.form-group').hide();
    $('#next').click(function(){            
  var n=step;
     if(step<6)
         {

  n++;
         curStepBtn =$('.nav-tabs > li:nth-of-type('+n+') > a');
  step =n;
    curStepBtn.removeClass('disabled').click();
    $('.step-txt').removeClass('text-disable');
        }
      });
//////////////////////////////////////////////////////////////////////////////////
       $('#back').click(function(){            
  var n=step;
     if(step>1)
         {
  n--;
         curStepBtn =$('.nav-tabs > li:nth-of-type('+n+') > a');
  step =n;
    curStepBtn.removeClass('disabled').click();
    $('.step-txt').removeClass('text-disable');
        }
      });
//////////////////////////////////////////////////////////////////////////////////      
 $('.nav-tabs > li > a').click(function() { 
            if($(this).hasClass('disabled')) {
            return false;
        } else {
            var linkIndex = $(this).parent().index();
            $('.nav-tabs > li').each(function(index, item) {  
                $(item).attr('rel-index', index - linkIndex+1);
                                });
       if(linkIndex==6)
     {
     $('#next').hide();
     $('#send').show();     
   }
   else
     {
     $('#next').show(); 
     $('#send').hide();    
     }  

      if(linkIndex>1)
     {
     $('#back').show();
     }
   else
     {
     $('#back').hide();
     }  
                 
     step= linkIndex; 
            }
});

//////////////////////////////////////////////////////////////////////
    $('#loss-cause_id').change(function()
  {
    if(($(this).val()== 1)||($(this).val()== 5)){
      $('#loss-country_id').parents('.form-group').show();         
    }
    else{
      $('#loss-country_id').parents('.form-group').hide();      
    }
    });
//////////////////////////////////////////////////////////////////////////////////
       $('#loss-marital_id').change(function()
  {
    if(($(this).val()== 2)){
      $('#loss-wedding_date').parents('.form-group').show();
      $('#loss-marital_bdate').parents('.form-group').show();         
      $('#loss-marital_fio').parents('.form-group').show();  
    }
    else{
      $('#loss-wedding_date').parents('.form-group').hide();
      $('#loss-marital_bdate').parents('.form-group').hide();      
      $('#loss-marital_fio').parents('.form-group').hide();            
    }
    });
//////////////////////////////////////////////////////////////////////////////////
})");

?> 

