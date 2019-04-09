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
			<p style="font-size: 20px"><?= $model->spDivision->sp_name_uz; ?></p>
		</td>
		<td style="text-align: right;padding:5px; position: relative;">
			<img style="width:125; height:170px; overflow:hidden" src="/uploads/<?= $model->photo;?>">			
		</td>
	</tr>
</table>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">	
	<tr>
		<td colspan="3" style="padding:15px;" class="text-center">
			<p style="font-size: 20px;"><b>Сўровнома - ариза<br>(чет элга чиқиш учун)</b></p>

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
			<p><b>Фамилия, исми, шарифи</b><br>(фамилия, исм, шарифи ўзгарган бўлса кўрсатилсин)</p>
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
			<p><b>Миллати</b></p>
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
			<p><b>Туғилган сана, ой ва йили</b></p>
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
			<p><b>Туғилган жойи</b><br>(республика, вилоят, туман, аҳоли пункти)</p>
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
			<p><b>Доимий яшаш жойи (прописка)</b></p>
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
			<p><b>Фуқаролиги</b><br>(агар бошқа давлат фуқаролиги бўлса, улар кўрсатилсин)</p>
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
			<p><b>Паспорт серияси, №, қачон ва ким томонидан берилган</b></p>
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
			<p><b>Хорижга чиқишдан мақсад</b><br>(вақтинчалик, доимий яшаш учун, туризм, хизмат сафари, кетиш давлати)</p>
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
			<p><b>Ўзбекистон ҳудудида ишлаш (таҳсил олиш, хизмат) даврида Давлат сирларига эга бўлган маълумотларга расмий рухсат олинганми? Ўзбекистон ҳудудини тарк этишга тўсиқ бола оладиган шартнома, контракт асосидаги ёки бошқа мажбуриятлари борми?</b></p>
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
			<p><b>Суд томонидан тайинланган, аммо бажарилмаган мажбуриятларингиз борми? Судда сизга нисбатан фуқаролик даъвоси мавжудми?</b></p>
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
			<p><b>Сизга нисбатан жиноий иш қўзғатилганми?</b></p>
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
			<p><b>Ҳарбий хизматга яроқлимисиз? 
			(17 ёшдан 27 ёшгача бўлган эркак жинсига мансуб фуқаролар учун)
			</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->army; ?>
		</td>
	</tr>		
</table><br>
<p style="font-size: 14px;"><b>13.Шу билан бирга, 18 ёшгача бўлган балоғат ёшига етмаган фарзандларимни мен билан бирга хорижга чиқишларига рухсат беришингизни сўрайман.</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Фамилия, исми, шарифи</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Туғилган вақти ва жойи</p>
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
<p style="font-size: 14px;"><b>14. 5 йил давомидаги меҳнат фаолиятим ҳақидаги меҳнат дафтарчамдан кўчирма (жумладан таълим муассасаларида таҳсил олиш ва ҳарбий хизмат даврлари):</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Қабул қилинган сана</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Кетиш санаси</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Лавозими ҳамда иш жойининг, вазирлик ва муссасанинг аниқ номи</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Корҳона, идора, ташкилотнинг манзили (адрес)</p>
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
<p>Анкетада кўрсатилган маълумотлар паспорт, ҳарбий билет ва мехнат дафтарчаси билан солиштириб текширилди.<br><br>
 "_______"_______________20___ г.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________<br>                   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;М.П.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Корҳона, муассаса, ташкилотнинг<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ваколатли ҳодими)
</p><br><br>
<p style=" font-size: 14px;"><b>15. Яқин қариндошларим ҳақидаги маълумотлар: турмуш ўртоғим, отам, онам, фарзандларим, собиқ турмуш ўртоғим - умумий никоҳдан фарзандлар бўлса (хорижда доимий яшашга тарк этиш учун паспорт расмийлаштириш холида тўлдирилади):</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Фамилия, исми, шарифи</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Қариндошлик алоқадорлиги, фуқаролиги</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Туғилган вақти ва жойи</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Иш жойи, лавозими</p>
		</th>		
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Яшаш жойининг манзили</p>
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
<p style=" font-size: 14px;"><b>16. Анкета тўлдириш вактида соҳта маълумотлар бериш хорижга чикишга рухсат олишда рад жавобига сабаб бўлишидан ҳабардорман.<br><br>" ____  " ________________ 20___ г.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;аризачининг имзоси<br><br>
	Хужжатлар қабул қилинган сана &nbsp;&nbsp;"______"&nbsp;&nbsp;___________________ 20____ г.&nbsp;&nbsp;&nbsp;____________________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ҳодим имзоси<br><br>Рухсат берилган сана  &nbsp;"______"&nbsp;&nbsp;___________________ 20____ г.
</b></p>