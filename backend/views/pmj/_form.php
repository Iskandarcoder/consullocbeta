<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
use backend\models\SpNationyii;
use yii\helpers\ArrayHelper;
use backend\models\SpCountryyii;
use backend\models\SpDivisionyii;
use backend\models\Status;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model backend\models\Pmj */
/* @var $form yii\widgets\ActiveForm */
$lang = Yii::$app->language;
?>

<div class="container well well-lg" style="background-color: white;border-radius: 8px!important; color: #18b19c;">
    <h3><b><?= Yii::t('app', 'Forma №30'); ?></b></h3></br>
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
                                    <i class="fa fa-child fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_5" data-toggle="tab">
                                    <i class="fa fa-briefcase fa-3x"></i>
                                </a>
                            </li>
                            <li style="width: 12.3%;">
                                <a href="#tab_1_6" data-toggle="tab">
                                    <i class="fa fa-users fa-3x"></i>
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
                                            <?= $form->field($model, 'mail')->input('email');?>
                                        </div>
                                    </div>                                     
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_2">
                                <div class="scroller"  data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt5"><?= Yii::t('app', 'Pasport'); ?></h3> 
                                    <div class="row">
                                        <div class="form-group col-sm-6">                    
                                            <?= $form->field($model, 'seria_pasp')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'numb_pasp')->textInput() ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">  
                                            <?= $form->field($model, 'pasp_date')->widget(DatePicker::classname(), [
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
                                            <?= $form->field($model, 'pasp_place')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6"> 
                                            <?= $form->field($model, 'citizenship_id')->dropDownList(
                                              ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                              ['prompt'=>Yii::t('app', 'Fuqarolikni tanlang')]
                                            ) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'second_cityzenship_id')->dropDownList(
                                              ArrayHelper::map(SpCountryyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                              ['prompt'=>Yii::t('app', 'Fuqarolikni tanlang')]
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">  
                                            <?= $form->field($model, 'living_place')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <?= $form->field($model, 'tel')->textInput() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_3">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt5"><?= Yii::t('app', 'Majburiyat'); ?></h3>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <?= $form->field($model, 'division_id')->dropDownList(
                                            ArrayHelper::map(SpDivisionyii::find()->all(), 'sp_id','sp_name_'.Yii::$app->language),
                                            ['prompt'=>Yii::t('app', 'Diplomatik vakolatxonani tanlang')]
                                            ) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12"> 
                                            <?= $form->field($model, 'reason')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12"> 
                                            <?= $form->field($model, 'security')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12"> 
                                            <?= $form->field($model, 'law_court')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12"> 
                                            <?= $form->field($model, 'criminal')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12"> 
                                            <?= $form->field($model, 'army')->textarea(['rows' => 2]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_1_4">
                                <div class="scroller" data-always-visible="1" data-rail-visible1="1">
                                    <h3 class="step-txt5"><?= Yii::t('app', 'Shu bilan birga, 18 yoshga to\'lmagan bolalarni chet elga chiqishiga ruxsat so\'rash' ); ?></h3>                                    
                                    <?php
                                        $Teenagers = $model->teenager;
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
                                                                    <?= Yii::t('app', 'Familiya, ism, sharifi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Tug\'ilgan sanasi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Tug\'ilgan joyi' ); ?>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <?php foreach ($Teenagers as $key => $teenager): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>          
                                                                    <?= $teenager->fio ?> 
                                                                </td>
                                                                <td>
                                                                    <?= $teenager->birth_date ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $teenager->birth_place ?>
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
                                    <h3 class="step-txt5"><?= Yii::t('app', 'Mehnat faoliyati (o\'qish va harbiy xizmat ham kiradi)' ); ?></h3>
                                    <?php
                                        $Employments = $model->employment;
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
                                                                    <?= Yii::t('app', 'Boshlanish sanasi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Tugash sanasi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Vazirlik (idoralar) ning ko\'rsatmalari bilan ish joyi va aniq nomlanishi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Korxona, muassasa, tashkilotning manzili' ); ?>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <?php foreach ($Employments as $key => $employment): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>          
                                                                    <?= $employment->start_date ?> 
                                                                </td>
                                                                <td>
                                                                    <?= $employment->end_date ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $employment->position ?>
                                                                </td>
                                                                <td>
                                                                    <?= $employment->place ?>
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
                                    <h3 class="step-txt6"><?= Yii::t('app', 'Yaqin qarindoshlari haqida ma\'lumotlar: turmush o\'rtog\'i, otasi, onasi, farzandlari, sobiq turmush o\'rtog\'i(agar turmushdan o\'rtog\'idan farzandlari bo\'lsa)' ); ?></h3>
                                    <?php
                                        $Relatives = $model->relative;
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
                                                                    <?= Yii::t('app', 'Familiya, ism, sharifi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Qarindoshlik darajasi, fuqaroligi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Tug\'ilgan sanasi, joyi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Ish joyi, lavozimi' ); ?>
                                                                </th>
                                                                <th class="text-center">
                                                                    <?= Yii::t('app', 'Yashash joyi, telefon raqami' ); ?>
                                                                </th>
                                                            </tr>
                                                            </tr>
                                                        </thead>
                                                        <?php foreach ($Relatives as $key => $relative): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>          
                                                                    <?= $relative->fio ?>
                                                                </td>
                                                                <td>
                                                                    <?= $relative->relative ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $relative->birth ?>
                                                                </td> 
                                                                <td>
                                                                    <?= $relative->work ?>
                                                                </td> 
                                                                 <td>
                                                                    <?= $relative->adres ?>
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
                                        <div class="form-group col-sm-3">
                                            <h4><?= Yii::t('app', 'Rasm' ); ?></h4>              
                                            <img src="/uploads/<?= $model->photo1;?>" style="width: 200px;">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <h4><?= Yii::t('app', 'Pasport nusxasi' ); ?></h4>  
                                            <img src="/uploads/<?= $model->photo2;?>" style="width: 200px;">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <h4><?= Yii::t('app', 'Tug`ilganlik haqida guvohnoma nusxasi' ); ?></h4>  
                                            <img src="/uploads/<?= $model->photo3;?>" style="width: 200px;">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <h4><?= Yii::t('app', 'Xarbiy guvohnoma nusxasi' ); ?></h4>  
                                            <img src="/uploads/<?= $model->photo;?>" style="width: 200px;">
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
