<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$lang = Yii::$app->language;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well well-lg">
<h4><b><?= Yii::t('app', 'O`zbekistonnig xorijdagi vakolatxonalari'); ?></b></h4>
</br>
	<div id="accordion">
		<?php $i=1;?>
	<?php foreach($embassy as $key =>$item):?>		
		<?php $i++;?>
	  <div class="accords">
	    <div id="heading<?=$i;?>">
	        <div class="accord collapsed" data-toggle="collapse" data-target="#collapse<?=$i;?>" -aria-expanded="true" aria-controls="collapse<?=$i;?>">
	          <b><?=$item['name_'.$lang];?></b>
	        </div>
	    </div>
	    <div id="collapse<?=$i;?>" class="collapse" aria-labelledby="heading<?=$i;?>" data-parent="#accordion">
	      <div class="ac_text">
	        <p><?=$item['text_'.$lang];?></p>
	      </div>
	    </div>	  
	  </div>
	<?php endforeach;?>
</div>
