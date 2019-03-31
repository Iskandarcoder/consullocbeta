<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\SpNationyii;
use backend\models\SpCountryyii;
use backend\models\SpDoc_type;
use backend\models\SpDivisionyii; 
use yii\captcha\Captcha;
 

/* @var $this yii\web\View */
/* @var $model backend\models\Docs */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
  .checkcontainer {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.checkcontainer input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.checkcontainer:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.checkcontainer input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.checkcontainer input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.checkcontainer .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= Yii::t('app', 'Hujjatlarni olish'); ?></b></h3>

    <div class="board">
        <ul class="nav nav-tabs">
            <div class="liner"></div>
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
                  <span><i class="fa fa-home"></i></span>
                </a>
            </li>
            <li rel-index="3">
                <a  id="s4" href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                  <span><i class="fa fa-file-text-o"></i></span>
                </a>
            </li>
        </ul>
    </div>    
    </br>
    </br>
    <div class="docs-form">

        <?php $form = ActiveForm::begin(); ?>
        <div class="tab-content">
                <div  class="tab-pane active" id="step-1">
                   <h3 class="step-txt1"><center><?= Yii::t('app', 'Asosiy ma\'lumotlar'); ?></center></h3>
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
                         <div class="form-group col-sm-6"">
                         <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>  
                        </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'pre_mname')->textInput(['maxlength' => true]) ?>
                         </div>
                    </div>
                  
                     <div class="row">
                         <div class="form-group col-sm-6">
                            <?= $form->field($model, 'birth_date')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose'=>true,
                                'todayHighlight' => true,
                                'startDate' => '-120y',
                                'endDate' => date('Y/m/d') 
                            //    'endDate' => '-16y'
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
                            <?= $form->field($model, 'citizenship_id')->widget(Select2::classname(), [
                         'data' => ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                         'language' => 'ru',
                        'options' => ['placeholder' => Yii::t('app', 'Fuqarolikni tanlang...')],
                         'pluginOptions' => [
                              'allowClear' => true,
                            'multiple' => false,
                          ],
                      ]); ?>
                         </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'pre_citizenship_id')->widget(Select2::classname(), [
                         'data' => ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                         'language' => 'ru',
                        'options' => ['placeholder' => Yii::t('app', 'Fuqarolikni tanlang...')],
                         'pluginOptions' => [
                              'allowClear' => true,
                            'multiple' => false,
                          ],
                      ]); ?>
                        </div>
                    </div>

                     <div class="row">
                         <div class="form-group col-sm-6">
                            <?= $form->field($model, 'nation_id')->widget(Select2::classname(), [
                          'data' => ArrayHelper::map(SpNationyii::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                          'language' => 'ru',
                          'options' => ['placeholder' => Yii::t('app', 'Millatni tanlang...')],
                          'pluginOptions' => [
                              'allowClear' => true,
                              'multiple' => false,
                          ],
                      ]);
                      
                    ?>
                         </div>
                         
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'file')->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                            ]);
                      ?>
                        </div>
                    </div>

                </div>    <!-- 1-step oxiri --> 

                           <!-- 2-step boshlanishi --> 
                <div  class="tab-pane"  id="step-2"> 
                  <h3 class="step-txt2"><center><?= Yii::t('app', 'Hujjat'); ?></center></h3>  
  

                      <div class="row">
                         <div class="form-group col-sm-12">
                            <?= $form->field($model, 'division_id')->widget(Select2::classname(), [
                         'data' => ArrayHelper::map(SpDivisionyii::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                         'language' => 'ru',
                        'options' => ['placeholder' => Yii::t('app', 'Elchixonani tanlang...')],
                         'pluginOptions' => [
                              'allowClear' => true,
                            'multiple' => false,
                          ],
                      ]);
                      
                    ?>
                         </div>
                       </div>
                            <?= $form->field($model, 'type_id')->widget(Select2::classname(), [
                          'data' => ArrayHelper::map(SpDoc_type::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                         // 'language' => 'ru',
                          'options' => ['placeholder' => Yii::t('app', 'Hujjatni tanlang...')],
                          'pluginOptions' => [
                              'allowClear' => true,
                              'multiple' => false,
                          ],
                      ]);
                      
                    ?>
                     <div class="row">
                         <div class="form-group col-sm-6">
                            <?= $form->field($model, 'type_place')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'type_date')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose'=>true,
                                'todayHighlight' => true,
                                'startDate' => '-120y',
                                'endDate' => date('Y/m/d')
                            ],
                        ]);
                      ?>
                         </div>
                    </div>

                     <div class="row">
                         <div class="form-group col-sm-6">
                            <?= $form->field($model, 'fio_father')->textInput(['maxlength' => true]) ?>
                         </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'fio_mother')->textInput(['maxlength' => true]) ?>
                         </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'study_name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'study_place')->textInput(['maxlength' => true]) ?>
                         </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'study_start_date')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose'=>true,
                                'todayHighlight' => true,
                                'startDate' => '-120y',
                                'endDate' => date('Y/m/d')
                            ],
                        ]);
                      ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'study_end_date')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose'=>true,
                                'todayHighlight' => true,
                                'startDate' => '-120y',
                                'endDate' => '+50y'
                            ],
                        ]);
                      ?>
                        </div>  
                    </div>

                     <div class="row">
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'pension_reason')->textInput(['maxlength' => true]) ?>
                        </div>
                         <div class="form-group col-sm-6">
                         <?= $form->field($model, 'pension_date')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose'=>true,
                                'todayHighlight' => true,
                                'startDate' => '-120y',
                                'endDate' => date('Y/m/d')
                            ],
                        ]);
                      ?>     
                         </div>  
                    </div>
                        
                        <?= $form->field($model, 'pension_org')->textInput(['maxlength' => true]) ?>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'last_cost')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose'=>true,
                                'todayHighlight' => true,
                                'startDate' => '-120y',
                                'endDate' => date('Y/m/d')
                            ],
                        ]);
                      ?>     
                        </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'last_cost_org')->textInput(['maxlength' => true]) ?>
                        </div>  
                    </div>

                </div> <!-- 2-step oxiri -->

                       <!-- 3-step boshlanishi -->
                <div  class="tab-pane"  id="step-3">
                    <h3 class="step-txt3"><center><?= Yii::t('app', 'Qo\'shimcha ma\'lumotlar'); ?></center></h3>                      

                        <?= $form->field($model, 'doc_target')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'living_place')->textInput(['maxlength' => true]) ?>

                        <div class="row">
                         <div class="form-group col-sm-4">
                            <?= $form->field($model, 'tel')->textInput() ?>
                        </div>
                        <div class="form-group col-sm-4">
                            <?= $form->field($model, 'fax')->textInput() ?>
                        </div>  
                        <div class="form-group col-sm-4">
                            <?= $form->field($model, 'email')->textInput() ?>
                        </div>  
                    </div>
                 </div> <!-- 3-step oxiri -->

                <!-- 4-step boshlanishi -->         


                     <div  class="tab-pane"  id="step-4">
                       <!-- <h3 class="step-txt4"><?= Yii::t('app', 'Boshqa shaxs' ); ?></h3> -->
                        
                    <div class="row">
                        <div class="form-group col-sm-2">
                        </div>  

                        <div class="form-group col-sm-8">
                        <label class="checkcontainer"><center><?= Yii::t('app', 'Agar talab qilinayotgan hujjat shaxsan sizga tegishli bo`lmasa,<br>belgini bosing va quyidagi savollarga javob bering');?></center>
                          <input type="checkbox" id="checkbox1">
                          <span class="checkmark"></span>
                        </label>
                        </div>  

                        <div class="form-group col-sm-2">
                        </div>  
                    </div>

                     <div class="row">
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'sec_surname')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group col-sm-6">
                            <?= $form->field($model, 'sec_name')->textInput(['maxlength' => true]) ?>
                        </div>  
                    </div>

                     <div class="row">
                        <div class="form-group col-sm-6">
                             <?= $form->field($model, 'sec_mname')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group col-sm-6">
                             <?= $form->field($model, 'sec_birthplace')->textInput(['maxlength' => true]) ?>
                        </div>  
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                        <?= $form->field($model, 'sec_birthdate')->widget(DatePicker::classname(), [
                            'language' => 'ru',
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose'=>true,
                                'todayHighlight' => true,
                                'startDate' => '-120y',
                                'endDate' => date('Y/m/d')
                            ],
                        ]);
                      ?>
                         </div>
                         <div class="form-group col-sm-6">
                        <?= $form->field($model, 'sec_citizenship_id')->widget(Select2::classname(), [
                         'data' => ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id', 'sp_name_'.Yii::$app->language),
                         'language' => 'ru',
                        'options' => ['placeholder' => Yii::t('app', 'Fuqarolikni tanlang...')],
                         'pluginOptions' => [
                              'allowClear' => true,
                            'multiple' => false,
                          ],
                      ]); ?>
                         </div>  
                    </div>
       
                    <div class="row">
                        <div class="form-group col-sm-6">
                       <?= $form->field($model, 'relative')->textInput(['maxlength' => true]) ?>
                        </div>
                         <div class="form-group col-sm-6">
                        <?= $form->field($model, 'sec_livingplace')->textInput(['maxlength' => true]) ?>
                         </div>  
                    </div>
                        
                    <div class="row">
                        <div class="form-group col-sm-6">
                        <?= $form->field($model, 'sec_tel')->textInput() ?>
                        </div>
                         <div class="form-group col-sm-6">
                        <?= $form->field($model, 'sec_fax')->textInput() ?>
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
                            <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-download"></i>' .  Yii::t('app', 'Yaratish') : Yii::t('app', 'Yangilash'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg' : 'btn btn-primary'] ) ?>
                        </div>
                    </div>
                </div>
            </div>

        

        <?php ActiveForm::end(); ?>

    </div>
</div>


<!-- begin snippet: js hide: false console: true babel: false -->

<!-- language: lang-js -->




<?php
$this->registerJs("$(document).ready(function($){
    step=1; 
    $('.btn-success').hide();
    $('#send').hide();
    $('#docs-type_place').parents('.form-group').hide();
    $('#docs-type_date').parents('.form-group').hide();
    $('#docs-fio_father').parents('.form-group').hide();
    $('#docs-fio_mother').parents('.form-group').hide();
    $('#docs-study_name').parents('.form-group').hide();
    $('#docs-study_place').parents('.form-group').hide();
    $('#docs-study_start_date').parents('.form-group').hide();
    $('#docs-study_end_date').parents('.form-group').hide();
    $('#docs-pension_reason').parents('.form-group').hide();
    $('#docs-pension_date').parents('.form-group').hide();
    $('#docs-pension_org').parents('.form-group').hide();
    $('#docs-last_cost').parents('.form-group').hide();
    $('#docs-last_cost_org').parents('.form-group').hide();
    $('#docs-sec_name').parents('.form-group').hide();
    $('#docs-sec_surname').parents('.form-group').hide();
    $('#docs-sec_mname').parents('.form-group').hide();
    $('#docs-sec_birthplace').parents('.form-group').hide();
    $('#docs-sec_birthdate').parents('.form-group').hide();
    $('#docs-sec_citizenship_id').parents('.form-group').hide();
    $('#docs-relative').parents('.form-group').hide();
    $('#docs-sec_livingplace').parents('.form-group').hide();
    $('#docs-sec_tel').parents('.form-group').hide();
    $('#docs-sec_fax').parents('.form-group').hide();



    $('#back').hide();
    $('#kus-wed_name').parents('.form-group').hide();
    $('#next').click(function(){            
  var n=step;
     if(step<4)
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
$('#docs-type_id').change(function()
  {

    // nikoh, ajrashganlik,o'lim 
    if((($(this).val()== 2))||($(this).val()== 3||($(this).val()== 4))){
      $('#docs-type_place').parents('.form-group').show();
      $('#docs-type_date').parents('.form-group').show();
      $('#docs-fio_father').parents('.form-group').hide();
      $('#docs-fio_mother').parents('.form-group').hide();     
    } else {
    // tug'ilganlik
    if(($(this).val()== 1)){
      $('#docs-type_place').parents('.form-group').show();
      $('#docs-type_date').parents('.form-group').show();
      $('#docs-fio_father').parents('.form-group').show();
      $('#docs-fio_mother').parents('.form-group').show();      
    } else {
      $('#docs-type_place').parents('.form-group').hide();
      $('#docs-type_date').parents('.form-group').hide();
      $('#docs-fio_father').parents('.form-group').hide();
      $('#docs-fio_mother').parents('.form-group').hide();   
      } 

    //  $('#docs-type_place').parents('.form-group').hide();
    //  $('#docs-type_date').parents('.form-group').hide();
   
      }  



    // ta'lim
    if(($(this).val()== 5)){
      $('#docs-study_name').parents('.form-group').show();
      $('#docs-study_place').parents('.form-group').show();
      $('#docs-study_start_date').parents('.form-group').show();
      $('#docs-study_end_date').parents('.form-group').show();      
    } else {
      $('#docs-study_name').parents('.form-group').hide();
      $('#docs-study_place').parents('.form-group').hide();
      $('#docs-study_start_date').parents('.form-group').hide();
      $('#docs-study_end_date').parents('.form-group').hide();    
      } 

    // pensiya
    if(($(this).val()== 6)){
      $('#docs-pension_reason').parents('.form-group').show();
      $('#docs-pension_date').parents('.form-group').show();
      $('#docs-pension_org').parents('.form-group').show();
      $('#docs-last_cost').parents('.form-group').show(); 
      $('#docs-last_cost_org').parents('.form-group').show();     
    } else {
      $('#docs-pension_reason').parents('.form-group').hide();
      $('#docs-pension_date').parents('.form-group').hide();
      $('#docs-pension_org').parents('.form-group').hide();
      $('#docs-last_cost').parents('.form-group').hide(); 
      $('#docs-last_cost_org').parents('.form-group').hide();  
      }

    });
//////////////////////////////////////////////////////////////////////////////////    
// checkbox

       $('#checkbox1').change(function() {
        if($(this).is(':checked')) {
          $('#docs-sec_name').parents('.form-group').show();
          $('#docs-sec_surname').parents('.form-group').show();
          $('#docs-sec_mname').parents('.form-group').show();
          $('#docs-sec_birthplace').parents('.form-group').show();
          $('#docs-sec_birthdate').parents('.form-group').show();
          $('#docs-sec_citizenship_id').parents('.form-group').show();
          $('#docs-relative').parents('.form-group').show();
          $('#docs-sec_livingplace').parents('.form-group').show();
          $('#docs-sec_tel').parents('.form-group').show();
          $('#docs-sec_fax').parents('.form-group').show();
        }else{
          $('#docs-sec_name').parents('.form-group').hide();
          $('#docs-sec_surname').parents('.form-group').hide();
          $('#docs-sec_mname').parents('.form-group').hide();
          $('#docs-sec_birthplace').parents('.form-group').hide();
          $('#docs-sec_birthdate').parents('.form-group').hide();
          $('#docs-sec_citizenship_id').parents('.form-group').hide();
          $('#docs-relative').parents('.form-group').hide();
          $('#docs-sec_livingplace').parents('.form-group').hide();
          $('#docs-sec_tel').parents('.form-group').hide();
          $('#docs-sec_fax').parents('.form-group').hide();
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
       if(linkIndex==4)
     {
     $('#next').hide();
     $('#send').show();
     $('.btn-success').show();
   }
   else
     {
     $('#next').show(); 
     $('#send').hide();
     $('.btn-success').hide();
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

 


})");

?> 
