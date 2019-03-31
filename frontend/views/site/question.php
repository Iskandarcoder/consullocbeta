<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$lang = Yii::$app->language;

$this->title = 'Question';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container well well-lg">
<h4><b><?= Yii::t('app', 'Ko`p beriladigan savollar'); ?></b></h4>
</br>
<p class="zagalovka"><b><?= Yii::t('app', 'Umumiy savollar'); ?></b></p>
	<div id="accordion">
		<?php $i=0;?>
	<?php foreach($question as $key =>$item):?>		
		<?php $i++;?>
	  <div class="accords">
	    <div id="heading<?=$i;?>">
	        <div class="accord collapsed" data-toggle="collapse" data-target="#collapse<?=$i;?>" aria-expanded="true" aria-controls="collapse<?=$i;?>">
	          <b><?=$item['name_'.$lang];?></b>
	        </div>
	    </div>
	    <div id="collapse<?=$i;?>" class="collapse" aria-labelledby="heading<?=$i;?>" data-parent="#accordion">
	      <div class="ac_text">
	        <p><?=$item['text_'.$lang];?></p>
	      </div>
	    </div>
	  </div>
	  <?php if($i==6):?>
	  	<p class='zagalovka'><b><?= Yii::t('app', 'Pasport almashtirish va rasmiylashtirish tartibi bo`yicha savollar'); ?></b></p>
	  <?php endif;?>
	  <?php if($i==9):?>
	  	<p class='zagalovka'><b><?= Yii::t('app', 'FHDYo bo`yicha savollar'); ?></b></p>
	  <?php endif;?>
	<?php endforeach;?>
</div>