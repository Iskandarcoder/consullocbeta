<?php
	use backend\models\SpNation;
	use frontend\widgets\barcode\BarcodeGenerator;
	$generator = new BarcodeGenerator();
	$barcodeTypes = [
		'ean13' => 'EAN-13',
		'itf14' => 'ITF-14',
		'ean8' => 'EAN-8',
		'ean128' => 'EAN-128',
		'upca' => 'UPCA',
		'upce' => 'UPCE',
		'code39' => 'CODE39',
		'code39ascii' => 'CODE39ASCII',
		'code93' => 'CODE93',
		'code93ascii' => 'CODE93ASCII',
		'code128' => 'CODE128',
		'code128a' => 'CODE128A',
		'code128b' => 'CODE128B',
		'code128c' => 'CODE128C',
		'code128ac' => 'CODE128AC',
		'code128bc' => 'CODE128BC',
		'ean128' => 'EAN128',
		'ean128a' => 'EAN128A',
		'ean128b' => 'EAN128B',
		'ean128c' => 'EAN128C',
		'ean128ac' => 'EAN128AC',
		'ean128bc' => 'EAN128BC',
		'codabar' => 'CODABAR',
		'itf' => 'ITF',
		'qr' => 'QR',
		'qrl' => 'QRL',
		'qrm' => 'QRM',
		'qrq' => 'QRQ',
		'qrh' => 'QRH',
		'dmtx' => 'DMTX',
		'dmtxs' => 'DMTXS',
		'dmtxr' => 'DMTXR',
		'gs1dmtx' => 'GS1DMTX',
		'gs1dmtxs' => 'GS1DMTXS',
		'gs1dmtxr' => 'GS1DMTXR',
	];
?>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">
	<tr>
		<td style=" padding: 5px;">
			<p style="text-align: left;">
				<?php
					$image = $generator->render_image('code128', $model->guide, [
								'f' => 'png',
								// 'w' => 500,
								'h' => 40,
								'tc' => '#FFFFFF',
								// 'ts' => 5, // shrift
								// 'th' => 15, // barcode bn yozuv orasi
							]);
					
					// $name = 'barcode-id-'.$product->id.'.png';
					// $path = Yii::getAlias('@frontend/web/barcodes/').$name;
					// imagepng($image, $path);
					
					ob_start();
					imagepng($image);
					$image = ob_get_contents();
					ob_end_clean();
				?>
				<div style="text-align: left;">
					<?php echo '<img style="margin-top: -10px;" src="data:image/png;base64,'.base64_encode($image).'" />'; ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->guide; ?>
				</div><br>
			</p>
		</td>
		<td style="text-align: right; font-size: 18px; width: 200px;">
			<p><b>Форма-30</b></p>
		</td>
	</tr>
</table>
<table  width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">
	<tr>
		<td style=" padding: 5px;" class="text-center">
			<p style="font-size: 20px"><?= $model->spDivision->name_ru; ?></p>
		</td>
		<td style="text-align: right;padding:5px; position: relative;">
			<img style="width:125; height:170px; overflow:hidden" src="/uploads/<?= $model->photo;?>">			
		</td>
	</tr>
</table>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">	
	<tr>
		<td colspan="3" style="padding:15px;" class="text-center">
			<p style="font-size: 20px;"><b>Заявление - анкета<br>(о выезде за границу)</b></p>

		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black; width: 50px;">
			<p><b>№</b></p>
		</td>
		<td colspan="2" style="border: 1px solid black; padding:15px;"></td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>1</b></p>
		</td>
		<td style=" padding: 5px; border: 1px solid black;">
			<p><b>Фамилия, имя, отчество</b><br>(если ранее имели другие фамилию, имя, отчество, укажите их)</p>
		</td>
		<td style="border: 1px solid black; padding:15px; width: 400px;">
			<?= $model->surname; ?> <?= $model->name; ?> <?= $model->mname; ?><br><?= $model->pre_surname; ?> <?= $model->pre_name; ?> <?= $model->pre_mname; ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>2</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Национальность</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spNation->sp_name_uz; ?>
		</td>			
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>3</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Число, месяц, год рождения</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->birth_date; ?>
		</td>		
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>4</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Место рождения</b><br>(республика, край, область, населенный пункт)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->birth_place; ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>5</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Место постоянного жительства (прописки)</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->living_place; ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>6</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Гражданство</b><br>(если одновременно имеете гражданство<br>другого государства, укажите об этом)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spCountry->sp_name_uz;?> <?= $model->spCountry2->sp_name_uz; ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>7</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Паспорт серии, №, дата выдачи и кем выдан</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->seria_pasp; ?> <?= $model->numb_pasp; ?><br><?= $model->pasp_date; ?> <?= $model->pasp_place; ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>8</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Цель выезда</b><br>(на временное, постоянное жительство, туризм, по	служебным делам, страна выезда)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->reason; ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>9</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Был ли у Вас за период работы (учебы, службы) оформлен официальный допуск к сведениям, составляющим государственную тайну? Имеете ли вы договорные, контрактные обязательства, препятствующие выезду за границу?</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->security; ?>
		</td>		
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>10</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Имеете ли Вы неисполненные обязательства, наложенные судом? Не предъявлен
			ли Вам гражданский иск в суде? </b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->law_court; ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>11</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Не возбуждено ли против Вас уголовное дело?</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->criminal; ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>12</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Подлежите ли Вы призыву на действительную срочную военную службу?
			(для граждан мужского пола в возрасте от 17 до 27 лет)</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->army; ?>
		</td>
	</tr>		
</table><br>
<p style="font-size: 14px;"><b>13. Одновременно прошу разрешить выезд за границу вместе со мной несовершеннолетним детям в возрасте до 18 лет.</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Фамилия, имя, отчество</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Дата и место рождения</p>
		</th>		
	</tr>
	<?php
		$teenagers = $model->teenager;
	?>
	<?php foreach($teenagers as $teenager):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $teenager->fio; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $teenager->birth_date; ?> <?= $teenager->birth_place; ?>
			</td>
		</tr>
	<?php endforeach;?>
</table><br><br><br><br>
<p style="font-size: 14px;"><b>14. Выписка из трудовой книжки о моей трудовой деятельности за последние 5 лет (включая учебу в учебных заведениях и военную службу)</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Дата пос-тупления</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Дата ухода</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Должность и точное наименование работы с указанием министерства (ведомства)</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Местонахождение (адрес) предприятия учреждения, организации</p>
		</th>		
	</tr>
	<?php
		$employments = $model->employment;
	?>
	<?php foreach($employments as $key => $employment):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $employment->start_date; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $employment->end_date; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $employment->position; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $employment->place; ?>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<br><br>	
<p>Сведения, указанные в анкете, сверены с паспортом, военным билетом и трудовой книжкой.<br><br>
 "_______"_______________20___ г.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________<br>                   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;М.П.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(фамилия должностного лица,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;предприятия, учреждения, организации)
</p><br><br>
<p style=" font-size: 14px;"><b>15. Сведения о моих близких родственниках: супруг (супруга), отец, мать, дети, бывш. супруга (супруг)-при наличии детей от совместного брака (заполняется при оформлении паспорта для выезда на постоянное жительство):</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Фамилия, имя, отчество</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Степень родства, гражданство</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Год и место рождения</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Место работы, должность</p>
		</th>		
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Адрес места жительства</p>
		</th>		
	</tr>
	<?php
		$relatives = $model->relative;
	?>
	<?php foreach($relatives as $key => $relative):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $relative->fio; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $relative->relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $relative->birth; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $relative->work; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $relative->adres; ?>
			</td>
		</tr>
	<?php endforeach;?>
</table><br>	
<p style=" font-size: 14px;"><b>16. Мне известно, что заведомо ложные сведения в заявлении могут повлечь отказ в выдаче разрешения на выезд за границу.<br><br>" ____  " ________________ 20___ г.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;подпись заявителя<br><br>
	Дата приема документов &nbsp;&nbsp;"______"&nbsp;&nbsp;___________________ 20____ г.&nbsp;&nbsp;&nbsp;____________________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;подпись сотрудника<br><br>Дата выдачи разрешения &nbsp;"______"&nbsp;&nbsp;___________________ 20____ г.
</b></p>