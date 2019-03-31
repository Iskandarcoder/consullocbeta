<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\SpNationyii;
use backend\models\SpCountry;
use backend\models\SpDoc_type;
use backend\models\SpDivisionyii;  
use backend\models\Docsstatus;
use backend\models\Status;

/* @var $this yii\web\View */
/* @var $model backend\models\Docs */
/* @var $form yii\widgets\ActiveForm */
$lang = Yii::$app->language;
?>

<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><center><?= Yii::t('app', 'Hujjatlarni olish'); ?></center></b></h3></br>

    <div class="docs-form">

        <?php $form = ActiveForm::begin(); ?>
            <div class="paddingless">
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs row text-center">
                            <li class="active" style="width: 19.8%;">
                                <a href="#tab_1_1" data-toggle="tab">
                                    <i class="fa fa-user fa-3x media-imgs"></i>
                                </a>
                            </li>
                            <li style="width: 19.8%;">
                                <a href="#tab_1_2" data-toggle="tab">
                                    <i class="fa fa-newspaper-o fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 19.8%;">
                                <a href="#tab_1_3" data-toggle="tab">
                                    <i class="fa fa-info fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 19.8%;">
                                <a href="#tab_1_4" data-toggle="tab">
                                    <i class="fa fa-child fa-3x"></i>
                                </a>
                            </li>       
                            <li style="width: 19.8%;">
                                <a href="#tab_1_5" data-toggle="tab">
                                    <i class="fa fa-briefcase fa-3x"></i>
                                </a>
                            </li>                 
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="scroller" data-always-visible="1" data-rail-visible="0">
                                    <center><h3 class="step-txt5"><?= Yii::t('app', 'Asosiy ma\'lumotlar'); ?></h3></center><br>
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
                                    <?= $form->field($model, 'citizenship_id')->textInput() ?>
                                 </div>
                                <div class="form-group col-sm-6">
                                    <?= $form->field($model, 'pre_citizenship_id')->textInput() ?>
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
                                    <!-- <h5><?= Yii::t('app', 'Passport nusxasi' ); ?></h5> -->
                                    <?= $form->field($model, 'file')->widget(FileInput::classname(), [
                                    'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                                    ]);
                                    ?>
                                    <img src="/uploads/<?= $model->scan_file;?>" style="width: 200px;"> 
                                    </div>

                            </div> 
                        </div>

                            <div class="tab-pane" id="tab_1_2">
                                <div class="scroller"  data-always-visible="1" data-rail-visible1="1">
                                    <center><h3 class="step-txt5"><?= Yii::t('app', 'Hujjat'); ?></h3></center><br>

                                    <div class="row">
                                         <div class="form-group col-sm-12">
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
                                        </div>
                                    </div>
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


                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_3">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <center><h3 class="step-txt5"><?= Yii::t('app', 'Qo\'shimcha ma\'lumotlar'); ?></h3></center>

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

                            </div>
                            </div>
                            <div class="tab-pane" id="tab_1_4">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <center><h3 class="step-txt5"><?= Yii::t('app', 'Hujjat boshqa shaxs tomonidan so\'ralayotgan bo\'lsa' ); ?></h3> </center>                                 

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
                        <?= $form->field($model, 'sec_citizenship_id')->textInput() ?>
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
                </div>
            </div>
            

                                        <div class="tab-pane" id="tab_1_5">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <center><h3 class="step-txt5"><?= Yii::t('app', 'Ariza holatini belgilash va izoh yozish' ); ?></h3> </center>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?= $form->field($model, 'status_id')->dropDownList(
                                                ArrayHelper::map(DocsStatus::find()->all(), 'id','name') 
                                                // ['prompt'=>Yii::t('app', 'Ariza holatini belgilang...')]
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?= $form->field($model, 'comment')->textarea(['rows' => 3]) ?>
                                        </div>
                                    </div>         
                
                             </div>
                        </div>
                    <!--END TABS-->
                    </div>
                </div>              
                <div class="row">               
                    <div class="col-sm-12">
                       <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Yaratish') : Yii::t('app', 'Yangilash'), ['class' => $model->isNewRecord ? 'btn btn-success col-sm-12' : 'btn btn-primary col-sm-12'] ) ?>
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
