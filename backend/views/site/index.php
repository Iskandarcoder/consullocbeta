<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Pmj;
use backend\models\Citizenship;
use backend\models\Docs;


// yangi arizalar soni
    $division = Yii::$app->user->identity->dvision_id;
    $new = Docs::find()
    // ->Where(['status_id'=>'2'])
    ->Where(['division_id' => $division])
    ->all();

//Jarayondagi arizalar soni
    $process = Docs::find()
    // ->Where(['>', 'status_id','1'])
    ->Where(['status_id'=>'3'])    
    ->andWhere(['division_id' => $division])
    ->all();
    
//Rad etilgan arizalar soni
    $rejected = Docs::find()
    ->Where(['status_id'=>'4'])   
    ->andWhere(['division_id' => $division])
    ->all();

//Ro`yxatga olingan arizalar soni
    $registered = Docs::find()
    ->Where(['status_id'=>'6'])   
    ->andWhere(['division_id' => $division])
    ->all();


//Yangi tushgan arizalar soni
    $new_pmj = Pmj::find()
    ->Where(['status_id'=>'0'])
    ->andWhere(['division_id' => $division])
    ->all();

     $cityzenship_new = Citizenship::find()
    ->Where(['status_id'=>'0'])
    ->andWhere(['division_id' => $division])
    ->all();
//end new

//Jarayondagi arizalar soni
    $proces = Pmj::find()
    ->Where(['>', 'status_id','0'])
    ->andWhere(['<', 'status_id','6'])
    ->andWhere(['division_id' => $division])
    ->all();

     $cityzenship_proces = Citizenship::find()
    ->Where(['>', 'status_id','0'])
    ->andWhere(['<', 'status_id','6'])
    ->andWhere(['division_id' => $division])
    ->all();
//end proces 

//Tugatilgan arizalar soni
    $end = Pmj::find()
    ->Where(['status_id'=>'6'])   
    ->andWhere(['division_id' => $division])
    ->all();

     $cityzenship_end = Citizenship::find()
    ->Where(['status_id'=>'6'])   
    ->andWhere(['division_id' => $division])
    ->all();
//end proces  

//Inkor qilinganlar
    $deny = Pmj::find()
    ->Where(['status_id'=>'4'])   
    ->andWhere(['division_id' => $division])
    ->all();

    $cityzenship_deny = Citizenship::find()
    ->Where(['status_id'=>'4'])   
    ->andWhere(['division_id' => $division])
    ->all();
//end

?>





<!-- BEGIN CONTAINER -->


<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">            
            
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-titlse" style="text-align: center;font-weight: bold;">
            <?= Yii::t('app', 'O`zbekiston Respublikasi konsullari uchun interaktiv xizmatlar'); ?>
            </h3>
            <hr>
            <!-- END PAGE HEADER-->
            <div class="space20">
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-purple-intense bold uppercase">Doimiy konsullik ro'yxatiga olish</span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2018</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">789</div>
                                        <a class="title" href="<?= Url::to(['/kus']) ?>" style="font-size: 15px;">
                                        Arizalar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-4">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">89</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Jarayonda <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-4">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">400</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Ro'yhatga olinganlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-purple-intense bold uppercase">Vaqtinchalik konsullik ro'yhatiga olish</span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2018</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">789</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Arizalar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-4">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">89</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Jarayonda <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-4">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">400</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Ro'yhatga olinganlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-blue-steel bold uppercase"><?= Yii::t('app', 'Xorijga doimiy yashashga chiqish yozuvini rasmiylashtirish (DYa) tartibi'); ?> </span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2019</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($new_pmj);?></div>
                                        <a class="title" href="<?= Url::to(['pmj/index']) ?>" style="font-size: 15px;">
                                        Arizalar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($proces);?></div>
                                        <a class="title" href="<?= Url::to(['pmj/process', 'status' => '1']) ?>" style="font-size: 15px;">
                                        Jarayonda <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($deny);?></div>
                                        <a class="title" href="<?= Url::to(['pmj/deny']) ?>" style="font-size: 15px;">
                                        Rad qilinganlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($end);?></div>
                                        <a class="title" href="<?= Url::to(['pmj/registered']) ?>" style="font-size: 15px;">
                                        Ro'yhatga olinganlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-blue-steel bold uppercase">Deport</span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2018</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">789</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Deport qilingan fuqarolar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-blue-steel bold uppercase">Qamoqdagi</span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2018</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">89</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Qamoqdagi fuqarolar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-blue-steel bold uppercase">Hujjatlar</span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2018</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;">89</div>
                                        <a class="title" href="javascript:;" style="font-size: 15px;">
                                        Hujjatlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-green-haze bold uppercase"><?= Yii::t('app', 'O`zbekiston Respublikasidan hujjatlarni so`rab olish tartibi'); ?></span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2019</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($new);?></div>
                                        <a class="title" href="<?= Url::to(['docs/index']) ?>" style="font-size: 15px;">    
                                        Barcha arizalar<i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($process);?></div>
                                        <a class="title" href="<?= Url::to(['docs/process']) ?>" style="font-size: 15px;">
                                        Jarayonda <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px; "><?php echo count($rejected);?></div>
                                        <a class="title" href="<?= Url::to(['docs/rejected']) ?>" style="font-size: 15px;">
                                        Rad etilganlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($registered);?></div>
                                        <a class="title" href="<?= Url::to(['docs/registered']) ?>" style="font-size: 15px;">
                                        Hujjat berildi <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-equalizer font-purple-plum hide"></i>
                                <span class="caption-subject font-blue-steel bold uppercase"><?= Yii::t('app', 'Fuqarolikdan chiqish'); ?> </span>
                            </div>
                            <div class="tools">
                                <a href="#" class="icon-calendar font-green-sharp"> 2019</a>
                                <a href="" class="collapse">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($cityzenship_new);?></div>
                                        <a class="title" href="<?= Url::to(['citizenship/index']) ?>" style="font-size: 15px;">
                                        Arizalar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($cityzenship_proces);?></div>
                                        <a class="title" href="<?= Url::to(['citizenship/process', 'statuss' => '1']) ?>" style="font-size: 15px;">
                                        Jarayonda <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="margin-bottom-10 visible-sm">
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($cityzenship_deny);?></div>
                                        <a class="title" href="<?= Url::to(['citizenship/deny']) ?>" style="font-size: 15px;">
                                        Rad qilinganlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="sparkline-chart">
                                        <div class="number" style="font-size: 20px;"><?php echo count($cityzenship_end);?></div>
                                        <a class="title" href="<?= Url::to(['citizenship/registered']) ?>" style="font-size: 15px;">
                                        Ro'yhatga olinganlar <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->
</div>