<?php
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
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->guide; ?>
				</div><br>
			</p>
		</td>		
	</tr>
</table><br><br>
<table  width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">
	<tr>
		<td style=" padding: 5px;" class="text-center">
			<p style="font-size: 20px"><?= $model->spDivision->name_uz; ?></p>
		</td>		
	</tr>
</table><br><br>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">	
	<tr>
		<td width="350px">
		</td>
		<td >
			<p style="font-size: 18px"><b>Президенту Республики Узбекистан  г-ну Мирзиёеву Шавкату Миромоновичу, от гражданина(ки) Республики Узбекистан<br><?= $model->surname ?> <?= $model->name ?> <?= $model->mname ?><br>
проживающего (ей) по адресу: <?= $model->living_place ?><br>сот.тел.: <?= $model->tel ?></b></p>

		</td>
	</tr>
</table><br><br><br><br>
<table  width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">
	<tr>
		<td style=" padding: 5px;" class="text-center">
			<p style="font-size: 20px"><b>З А Я В Л Е Н И Е</b></p>
		</td>		
	</tr><br><br>
	<tr>
		<td style=" padding: 5px;">
			<p style="font-size: 18px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Я,<?= $model->surname ?> <?= $model->name ?> <?= $model->mname ?>, прошу Вас оформить мне утрату гражданства Республики Узбекистан, в связи с <?= $model->cause->name_uz;?><?php if((($model->cause_id)=='1')||(($model->cause_id)=='5')){ echo " ("; echo $model->spCountry->sp_name_uz; ;  echo ")."; }else{ echo "."; }  ?></p>
		</td>		
	</tr>
</table><br><br><br><br>
<table  width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">
	<tr>
		<td style=" padding: 5px;" class="text-center">
			<p style="font-size: 18px"><b><?= $model->date;?></b><br><?= $model->city;?></p>
		</td>
		<td style=" padding: 5px;" class="text-center">
			<p style="font-size: 18px"><b><?= $model->surname ?> <?= $model->name ?> <?= $model->mname ?></b></p>
		</td>			
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">	
	<tr>
		<td colspan="3" style="padding:15px;" class="text-center">
			<p style="font-size: 20px;"><b>А В Т О Б И О Г Р А Ф И Я</b></p>
		</td>
	</tr>
	<tr>		
		<td style=" padding: 5px; border: 1px solid black;">
			<p><b>Фамилия, имя, отчество</b><br>(если ранее имели другие фамилию, укажите)</p>
		</td>
		<td style="border: 1px solid black; padding:15px; width: 400px;">
			<?= $model->surname; ?> <?php if(($model->cause_id)!='NULL'){ echo " ("; echo $model->pre_mname; ;  echo ")"; }else{ echo " "; }  ?> <?= $model->name; ?> <?= $model->mname; ?>
		</td>
	</tr>	
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Число, месяц, год рождения</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->birt_date; ?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Место рождения</b><br>(республика, край, область, населенный пункт)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->birth_place; ?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Гражданство</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spCountry3->sp_name_uz;?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Национальность</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spNation->sp_name_uz; ?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Образование</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->education->uz_type_edu; ?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Судимости</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->court; ?>
		</td>	
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Семейная положения</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spMarital->sp_name_uz; ?>
		</td>
	</tr>	
	<?php if(($model->marital_id)=='2')
		{  
			echo   "<tr>			
						<td style='padding: 5px;border: 1px solid black;'>
							<p><b>Дата вступления в брак</b></p>
						</td>
						<td style='border: 1px solid black; padding:15px;'>";
						echo $model->wedding_date; ;
				  echo "</td>
					</tr>" ;				
		}else{
			echo " ";
		} ?>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Страна пребывания</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spCountry2->sp_name_uz; ?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Дата пребывания</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->enter_date; ?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Место постоянного жительства (прописки)</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->living_place; ?>
		</td>
	</tr>
	<tr>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>До переезда проживал/проживала по адресу</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->last_place; ?>
		</td>
	</tr>
</table><br><br><br>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">
	<tr>
		<td colspan="3" style="padding:15px;" class="text-center">
			<p style="font-size: 17px;"><b>Трудовая деятельность</b></p>
		</td>
	</tr>	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Дата пос-тупления</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Дата ухода</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Должность и точное наименование работы с указанием место работы</p>
		</th>
	</tr>
	<?php
		$labors = $model->labor;
	?>
	<?php foreach($labors as $key => $labor):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $labor->begin_date; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $labor->end_date; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $labor->work; ?>
			</td>			
		</tr>
	<?php endforeach;?>
</table><br><br><br>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">
	<tr>
		<td colspan="8" style="padding:15px;" class="text-center">
			<p style="font-size: 22px;"><b>Сведения о близких родственниках</b></p>
		</td>
	</tr>	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Степень родства</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Фамилия, имя, отчество</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Год и место рождения</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Гражданство,<br>Национальность,<br>Образования</p>
		</th>		
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Семейная положения</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Судимостей имеет/не имеет</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Должность и место работы</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Постоянное место жительство</p>
		</th>
	</tr>
	<?php
		$families = $model->family;
	?>
	<?php foreach($families as $key => $family):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->typeRelative->uz_type_relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->fio; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->birth_date; ?><br><?= $family->birth_place; ?>
			</td>	
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->spCountry->sp_name_uz; ?><br>
				<?= $family->spNation->sp_name_uz; ?><br>
				<?= $family->education->uz_type_edu; ?>				
			</td>			
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->spMarital->sp_name_uz; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->court; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->work; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $family->address; ?>
			</td>		
		</tr>
	<?php endforeach;?>
</table><br><br><br>
<table  width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">
	<tr>
		<td style=" padding: 5px;" class="text-center">
			<p style="font-size: 18px"><b><?= $model->date;?></b><br><?= $model->city;?></p>
		</td>
		<td style=" padding: 5px;" class="text-center">
			<p style="font-size: 18px"><b><?= $model->surname ?> <?= $model->name ?> <?= $model->mname ?></b></p>
		</td>			
	</tr>
</table>