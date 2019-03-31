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
use backend\models\Education;
use backend\models\TypeRelative;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\select2\Select2;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizenship */
/* @var $form yii\widgets\ActiveForm */
?>
<style type="text/css">
  .fileinput-cancel-button {
    display: none;
  }
  .fileinput-upload-button {
    display: none;
  }
  .fileinput-remove-button {
    display: none;
  }
</style>
<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= Yii::t('app', 'O`zbekiston Respublikasi fuqaroligidan chiqishni rasmiylashtirish'); ?></b></h3></br>
    <div class="board">
        <ul class="nav nav-tabs li4">
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
                    <span><i class="fa fa-question-circle-o"></i></span>
                </a>
            </li>
            <li rel-index="3">
                <a  id="s4" href="#step-4" class="btn disabled" aria-controls="step-4" role="tab" data-toggle="tab">
                    <span><i class="fa fa-child"></i></span>
                </a>
            </li>
            <li rel-index="4">
                <a  id="s5" href="#step-5" class="btn disabled" aria-controls="step-5" role="tab" data-toggle="tab">
                    <span><i class="fa fa-briefcase"></i></span>
                </a>
            </li>
            <li rel-index="5">
                <a  id="s6" href="#step-6" class="btn disabled" aria-controls="step-6" role="tab" data-toggle="tab">
                    <span><i class="fa fa-users"></i></span>
                </a>
            </li>
            <li rel-index="6">
                <a  id="s7" href="#step-7" class="btn disabled" aria-controls="step-7" role="tab" data-toggle="tab">
                    <span><i class="fa fa-file-text-o"></i></span>
                </a>
            </li>
        </ul>
    </div>
    </br>
    </br>    
    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
        <div class="tab-content">
            <div  class="tab-pane active" id="step-1">
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
                        <?= $form->field($model, 'birth_date')->widget(DatePicker::classname(), [
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
                    <div class="form-group col-sm-6">
                        <?php echo $form->field($model, 'file')->widget(FileInput::classname(), [
                          'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div>
                </div>
            </div>    <!-- 1-step tugadi shu yerda --> 
            <div  class="tab-pane"  id="step-2"> 
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
            </div> <!-- 2-step tugadi -->
            <div  class="tab-pane"  id="step-3">
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
            </div> <!-- 3-step tugadi -->
            <div  class="tab-pane"  id="step-4">
                <h3 class="step-txt5"><?= Yii::t('app', 'O`zbekiston Respublikasida yashayotgan yaqin qarindoshlari' ); ?></h3>         
                <div class="row">
                    <div class="form-group col-sm-12">
                        <div class="panel panel-default">              
                            <div class="panel-body" id="inrelative">
                                <?php DynamicFormWidget::begin([
                                    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                    'widgetBody' => '.container-items1', // required: css class selector
                                    'widgetItem' => '.item1', // required: css class
                                    'limit' => 5, // the maximum times, an element can be cloned (default 999)
                                    'min' => 1, // 0 or 1 (default 1)
                                    'insertButton' => '.add-item1', // css class
                                    'deleteButton' => '.remove-item1', // css class
                                    'model' => $modelInrelative[0],
                                    'formId' => 'dynamic-form',
                                    'formFields' => [
                                    'fio',
                                    'relative',
                                    'birth_date',
                                    'birth_place',
                                    'nationality_id',
                                    'citizenship',
                                    'work',
                                    'living_place',
                                    ],
                                ]); ?>
                                    <div class="container-items1"><!-- widgetContainer -->
                                        <?php foreach ($modelInrelative as $i => $modelin): ?>
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
                                                        if (!$modelin->isNewRecord) {
                                                            echo Html::activeHiddenInput($modelin, "[{$i}]id");
                                                        }
                                                    ?>
                                                    <?= $form->field($modelin, "[{$i}]fio")->textInput(['maxlength' => true]) ?>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelin, "[{$i}]relative")->dropDownList(ArrayHelper::map(TypeRelative::find()->all(), 'id', Yii::$app->language.'_type_relative'),
                                                                ['prompt'=>Yii::t('app', 'Qarindoshlik darajasini tanlang')]
                                                            ) ?> 
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelin, "[{$i}]nationality_id")->dropDownList(ArrayHelper::map(SpNationyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                                                ['prompt'=>Yii::t('app', 'Millatni tanlang')]
                                                            ) ?> 
                                                        </div>
                                                    </div>
                                                     <div class="row">
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelin, "[{$i}]citizenship")->dropDownList(
                                                                ArrayHelper::map(SpCountryyii::find()->all(), 'id','sp_name_'.Yii::$app->language),
                                                                ['prompt'=>Yii::t('app', 'Fuqaroligini tanlang')]
                                                            ) ?>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <?= $form->field($modelin, "[{$i}]birth_date")->textInput(['maxlength' => true]) ?>
                                                        </div>
                                                    </div>
                                                    <?= $form->field($modelin, "[{$i}]birth_place")->textInput(['maxlength' => true])
                                                    ?>
                                                    <?= $form->field($modelin, "[{$i}]work")->textInput(['maxlength' => true]) ?>
                                                    <?= $form->field($modelin, "[{$i}]living_place")->textInput(['maxlength' => true]) ?>                   
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php DynamicFormWidget::end(); ?>
                            </div>
                        </div>                     
                    </div> 
                </div> 
            </div><!-- 4-step tugadi -->
            <div  class="tab-pane"  id="step-5">
                <h3 class="step-txt5"><?= Yii::t('app', 'O`zbekiston Respublikasi hududidan tashqarida istiqomat qiluvchi yaqin qarindoshlari' ); ?></h3>
                <div class="row">  
                    <div class="form-group col-sm-12">
                        <div class="panel panel-default">             
                            <div class="panel-body" id="outrelative">
                                <?php DynamicFormWidget::begin([
                                    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                    'widgetBody' => '.container-items2', // required: css class selector
                                    'widgetItem' => '.item2', // required: css class
                                    'limit' => 10, // the maximum times, an element can be cloned (default 999)
                                    'min' => 1, // 0 or 1 (default 1)
                                    'insertButton' => '.add-item2', // css class
                                    'deleteButton' => '.remove-item2', // css class
                                    'model' => $modelOutrelative[0],
                                    'formId' => 'dynamic-form',
                                    'formFields' => [
                                    'fio',
                                    'relative',
                                    'birth_date',
                                    'birth_place',
                                    'nationality_id',
                                    'citizenship',
                                    'work',
                                    'living_place',
                                    ],
                                ]); ?>
                                    <div class="container-items2"><!-- widgetContainer -->
                                        <?php foreach ($modelOutrelative as $i => $modelout): ?>
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
                                                    if (!$modelout->isNewRecord) {
                                                      echo Html::activeHiddenInput($modelout, "[{$i}]id");
                                                    }
                                                ?>
                                                <?= $form->field($modelout, "[{$i}]fio")->textInput(['maxlength' => true]) ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <?= $form->field($modelout, "[{$i}]relative")->dropDownList(ArrayHelper::map(TypeRelative::find()->all(), 'id', Yii::$app->language.'_type_relative'),
                                                            ['prompt'=>Yii::t('app', 'Qarindoshlik darajasini tanlang')]
                                                        ) ?>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <?= $form->field($modelout, "[{$i}]birth_date")->textInput(['maxlength' => true]) ?>
                                                    </div>
                                                </div>
                                                <?= $form->field($modelout, "[{$i}]birth_place")->textInput(['maxlength' => true])
                                                ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <?= $form->field($modelout, "[{$i}]citizenship")->dropDownList(
                                                            ArrayHelper::map(SpCountryyii::find()->all(), 'id','sp_name_'.Yii::$app->language),
                                                        ['prompt'=>Yii::t('app', 'Fuqaroligini tanlang')]
                                                    ) ?>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <?= $form->field($modelout, "[{$i}]nationality_id")->dropDownList(ArrayHelper::map(SpNationyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                                            ['prompt'=>Yii::t('app', 'Millatni tanlang')]
                                                        ) ?>
                                                    </div>
                                                </div>                                                
                                                <?= $form->field($modelout, "[{$i}]work")->textInput(['maxlength' => true]) ?>
                                                <?= $form->field($modelout, "[{$i}]living_place")->textInput(['maxlength' => true]) ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php DynamicFormWidget::end(); ?>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div><!-- 5-step tugadi -->
            <div  class="tab-pane"  id="step-6">
                <h3 class="step-txt6"><?= Yii::t('app', 'Balog`at yoshiga yetmagan shaxslar bilan birga fuqarolikdan chiqish' ); ?></h3>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <div class="panel panel-default">             
                            <div class="panel-body" id="children">
                                <?php DynamicFormWidget::begin([
                                    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                                    'widgetBody' => '.container-items3', // required: css class selector
                                    'widgetItem' => '.item3', // required: css class
                                    'limit' => 10, // the maximum times, an element can be cloned (default 999)
                                    'min' => 1, // 0 or 1 (default 1)
                                    'insertButton' => '.add-item3', // css class
                                    'deleteButton' => '.remove-item3', // css class
                                    'model' => $modelChildren[0],
                                    'formId' => 'dynamic-form',
                                    'formFields' => [
                                    'fio',
                                    'birth_date',
                                    'relative',
                                    'comment',
                                  ],
                                ]); ?>
                                    <div class="container-items3"><!-- widgetContainer -->
                                        <?php foreach ($modelChildren as $i => $modelch): ?>
                                        <div class="item3 panel panel-default"><!-- widgetBody -->
                                            <div class="panel-heading">
                                                <h3 class="panel-title pull-left">
                                                    <i class="fa fa-user"></i> <?= Yii::t('app','Agar to\'ldirmoqchi bo\'lsangiz "+" tugmasini bosing!'); ?>
                                                </h3>
                                                <div class="pull-right">
                                                    <div class="col-sm-6" style="padding: 0 1px;margin-top: 2px">
                                                        <button type="button" class="add-item3 btn btn-success btn-xs" style="padding: 1px 8px!important; margin: 0">
                                                            <i class="glyphicon glyphicon-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6" style="padding: 0 1px;margin-top: 2px">
                                                        <button type="button" class="remove-item3 btn btn-danger btn-xs" style="padding: 1px 8px!important; margin: 0">
                                                            <i class="glyphicon glyphicon-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-body">
                                                <?php
                                                // necessary for update action.
                                                if (!$modelch->isNewRecord) {
                                                  echo Html::activeHiddenInput($modelch, "[{$i}]id");
                                                }
                                                ?>
                                                <?= $form->field($modelch, "[{$i}]fio")->textInput(['maxlength' => true]) ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <?= $form->field($modelch, "[{$i}]birth_date")->textInput(['maxlength' => true]) ?> 
                                                    </div>
                                                    <div class="col-sm-6">                                     
                                                        <?= $form->field($modelch, "[{$i}]relative")->dropDownList(ArrayHelper::map(TypeRelative::find()->all(), 'id', Yii::$app->language.'_type_relative'),
                                                            ['prompt'=>Yii::t('app', 'Qarindoshlik darajasini tanlang')]
                                                        ) ?>
                                                    </div>
                                                </div>
                                                <?= $form->field($modelch, "[{$i}]comment")->textInput(['maxlength' => true])
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
            </div><!-- 6-step tugadi -->
            <div  class="tab-pane"  id="step-7">
                <h3 class="step-txt7"><?= Yii::t('app', 'Hujjatlar nusxasi' ); ?></h3>
                <div class="row">
                    <div class="form-group col-sm-6">              
                        <?php echo $form->field($model, 'photo1')->widget(FileInput::classname(), [
                          'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?php echo $form->field($model, 'photo2')->widget(FileInput::classname(), [
                          'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?php echo $form->field($model, 'photo3')->widget(FileInput::classname(), [
                          'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div>
                    <div class="form-group col-sm-6">
                        <?php echo $form->field($model, 'photo4')->widget(FileInput::classname(), [
                          'options' => ['accept' => 'image/*','maxSize'=>'500000'],
                          ]);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>
                    </div>
                </div>
            </div><!-- 7-step tugadi -->
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
    $('#citizenship-marital_name').parents('.form-group').hide();
    $('#citizenship-marital_bdate').parents('.form-group').hide();
    $('#citizenship-marital_nation').parents('.form-group').hide();
    $('#citizenship-marital_place').parents('.form-group').hide();

    $('#next').click(function(){            
  var n=step;
     if(step<7)
         {
  n++;
         curStepBtn =$('.nav-tabs > li:nth-of-type('+n+') > a');
  step =n;
    curStepBtn.removeClass('disabled').click();
    $('.step-txt').removeClass('text-disable');
        }
      });

//////////////////////////////////////////////////////////////////////
    $('#citizenship-marital_id').change(function()
  {
    if(($(this).val()== 2)){
      $('#citizenship-marital_name').parents('.form-group').show();
      $('#citizenship-marital_bdate').parents('.form-group').show();
      $('#citizenship-marital_nation').parents('.form-group').show();
      $('#citizenship-marital_place').parents('.form-group').show();      
    }
    else{
      $('#citizenship-marital_name').parents('.form-group').hide();
      $('#citizenship-marital_bdate').parents('.form-group').hide();
      $('#citizenship-marital_nation').parents('.form-group').hide();
      $('#citizenship-marital_place').parents('.form-group').hide();
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
       if(linkIndex==7)
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
})");

?> 
