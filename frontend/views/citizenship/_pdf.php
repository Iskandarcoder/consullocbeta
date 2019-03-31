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
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->guide; ?></p>
				</div><br>
			</p>
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
			<p style="font-size: 20px;"><b>АНКЕТА - ЗАЯВЛЕНИЕ</b></p>
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
			<p><b>Ф.И.О.</b><br>(указать фамилию если изменяли)</p>
		</td>
		<td style="border: 1px solid black; padding:15px; width: 400px;">
			<?= $model->surname; ?> <?= $model->name; ?> <?= $model->mname; ?> <br>
			<?= $model->pre_surname; ?> <?= $model->pre_name; ?> <?= $model->pre_mname; ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>2</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Дата и место рождения</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->birth_date; ?>
		</td>			
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>3</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Национальность</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spNation->sp_name_ru; ?>
		</td>		
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>4</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Образование</b></b>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->education->ru_type_edu ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>5</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Профессия</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->profession ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>6</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Семейное положение</b><br>(ФИО мужа/жены, год рождения, гражданство, место жительства)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spMarital->sp_name_ru ?> <?= $model->marital_name ?> <?= $model->marital_bdate ?> <?= $model->spNation->sp_name_ru ?> <?= $model->marital_place ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>7</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Социальное положение</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->social_status ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>8</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Состоял ли под судом и следствием</b><br>(когда, где, за что)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->court ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>9</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Служил ли в армии</b><br>(род войск, когда)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->army ?>
		</td>		
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>10</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Отношение к воинской обязанности в настоящее время</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->army_now ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>11</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Какие имеет почетные звания и государственные награды Республики Узбекистан</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->medal ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>12</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Когда выехал из Узбекистана на постоянное место жительства за границу</b><br>В связи с чем и по какому документу (паспорт, серия, выдавший орган)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->pmj ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>13</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Последнее место жительства в Узбекистане</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->last_place ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>14</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Отметка о поездках в Узбекистан</b><br>(когда и куда)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->visit_uzb ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>15</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Род занятий: в качестве кого и где работаете</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->business ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>16</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Какое гражданство хотите принять</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spCountry->sp_name_ru ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>17</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Причины выхода из гражданства Республики Узбекистан</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->cause ?>
		</td>
	</tr>			
</table><br><br>
<p style="font-size: 14px;"><b>18.Близкие родственники, проживающие в Республике Узбекистан</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Ф.И.О.</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Степень родства</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Дата и место рождения</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Национальность</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Гражданство</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Место работы, специальность</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Адрес места жительства</p>
		</th>			
	</tr>
	<?php
		$inrelatives = $model->inrelative;
	?>
	<?php foreach($inrelatives as $inrelative):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->fio; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->typeRelative->ru_type_relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->birth_date; ?> <?= $inrelative->birth_place; ?>	
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->spNation->sp_name_ru; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->spCountry->sp_name_ru; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->work; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->living_place; ?>
			</td>
		</tr>
	<?php endforeach;?>
</table><br><br>
<p style="font-size: 14px;"><b>19. Близкие родственники, проживающие за пределами Республики Узбекистан</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Ф.И.О.</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Степень родства</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Дата и место рождения</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Национальность</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Гражданство</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Место работы, специальность</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Адрес места жительства</p>
		</th>			
	</tr>
	<?php
		$outrelatives = $model->outrelative;
	?>
	<?php foreach($outrelatives as $key => $outrelative):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->fio; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->typeRelative->ru_type_relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->birth_date; ?> <?= $inrelative->birth_place; ?>	
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->spNation->sp_name_ru; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->spCountry->sp_name_ru; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->work; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->living_place; ?>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<br><br>	
<p style="text-align: center;"><b>Ariza</b></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сообщая о себе вышеуказанные сведения, прошу Президента Республики Узбекистан разрешить мне выход из гражданства Республики Узбекистан.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Одновременно со мной прошу разрешить выход из гражданства Республики Узбекистан следующим, находящимся при мне несовершеннолетним лицам:</p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p><b>ФИО</b></p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p><b>Дата рождения</b></p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p><b>Степень родства</b></p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p><b>Примечания</b></p>
		</th>
	</tr>
	<?php
		$childrens = $model->children;
	?>
	<?php foreach($childrens as $key => $children):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $children->fio; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $children->birth_date; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $children->typeRelative->ru_type_relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $children->comment; ?>
			</td>			
		</tr>
	<?php endforeach;?>
</table><br>	
<p style=" font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Прилагаются следующие документы:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Заявление<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Анкета-заявление<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Биография<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Копии паспортные страницы Узбекистана<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Согласие моего супруга на выход из гражданства<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Мой адрес проживания и номер телефона</b><br>
	<?= $model->living_place ?> <?= $model->tel ?><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"______"&nbsp;&nbsp;___________________ 20____ г.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->surname; ?> <?= $model->name; ?> <?= $model->mname; ?>
</p>