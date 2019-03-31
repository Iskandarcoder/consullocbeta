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
			<p style="font-size: 20px"><?= $model->spDivision->name_uz; ?></p>
		</td>
		<td style="text-align: right;padding:5px; position: relative;">
			<img style="width:125; height:170px; overflow:hidden" src="/uploads/<?= $model->photo;?>">			
		</td>
	</tr>
</table>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;">	
	<tr>
		<td colspan="3" style="padding:15px;" class="text-center">
			<p style="font-size: 20px;"><b>SO`ROVNOMA - ARIZA</b></p>
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
			<p><b>Familiya, ismi, sharifi</b><br>(o`zgargan bo`lsa ko`rsatilsin)</p>
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
			<p><b>Tug`ilgan sana, oy va yili</b></p>
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
			<p><b>Millati</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spNation->sp_name_uz; ?>
		</td>		
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>4</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Ma`lumoti</b></b>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->education->uz_type_edu ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>5</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Kasbi</b></p>
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
			<p><b>Oilaviy holati</b><br>(Turmush o`rtog`ining F.I.Sh., tug`ilgan vaqti, fuqaroligi, yashash joyi)</p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->spMarital->sp_name_uz ?> <?= $model->marital_name ?> <?= $model->marital_bdate ?> <?= $model->spNation->sp_name_uz ?> <?= $model->marital_place ?>
		</td>
	</tr>
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>7</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>Ijtimoiy maqomi</b></p>
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
			<p><b>Sud yoki tergov jarayoniga jalb qilinganligi</b><br>(qachon, qayerda, nima sababdan)</p>
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
			<p><b>Harbiy xizmat o`taganmi,</b><br>(qo`shin turi, qachon)</p>
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
			<p><b>Harbiy xizmatga hozirdagi aloqadorligi</b></p>
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
			<p><b>Faxriy unvon va Davlat mukofotlari bormi</b></p>
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
			<p><b>Doimiy yashash uchun O`zbekiston hududini qachon tark etgan</b><br>nima sababli va qaysi hujjat asosida (pasport, seriya, kim tamonidan berilgan)</p>
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
			<p><b>O`zbekiston hududida oxirgi yashash joyi</b></p>
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
			<p><b>O`zbekistonga bo`lgan tashriflaringiz</b><br>(qachon va qayerga)</p>
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
			<p><b>Kasbi: qayerda va qaysi lavozimda ishlaydi</b></p>
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
			<p><b>Qaysi davlat fuqaroligini olmoqchi</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->citizenship_id ?>
		</td>
	</tr>	
	<tr>
		<td class="text-center" style="border: 1px solid black;">
			<p><b>17</b></p>
		</td>
		<td style=" padding: 5px;border: 1px solid black;">
			<p><b>O`zbekiston Respublikasi fuqaroligidan chiqish sababi</b></p>
		</td>
		<td style="border: 1px solid black; padding:15px;">
			<?= $model->cause ?>
		</td>
	</tr>			
</table><br><br>
<p style="font-size: 14px;"><b>18. O`zbekiston Respublikasida yashayotgan yaqin qarindoshlari</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>F.I.Sh.</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Qarindoshlik aloqadorligi</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Tug`ilgan vaqti va joyi</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Millati</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Fuqaroligi</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Ish joyi, mutaxassisligi</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Yashash joyi manzili</p>
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
				<?= $inrelative->typeRelative->uz_type_relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->birth_date; ?> <?= $inrelative->birth_place; ?>	
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->spNation->sp_name_uz; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $inrelative->spCountry->sp_name_uz; ?>
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
<p style="font-size: 14px;"><b>19. O`zbekiston Respublikasi hududidan tashqarida istiqomat qiluvchi yaqin qarindoshlari</b></p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">	
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>F.I.Sh.</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Qarindoshlik aloqadorligi</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Tug`ilgan vaqti va joyi</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Millati</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Fuqaroligi</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Ish joyi, mutaxassisligi</p>
		</th>	
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Yashash joyi manzili</p>
		</th>		
	</tr>
	<?php
		$outrelatives = $model->outrelative;
	?>
	<?php foreach($outrelatives as $key => $outrelative):?>
		<tr>
			<td style="border: 1px solid black; padding:15px;">
				<?= $outrelative->fio; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $outrelative->typeRelative->uz_type_relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $outrelative->birth_date; ?> <?= $outrelative->birth_place; ?>	
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $outrelative->spNation->sp_name_uz; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $outrelative->spCountry->sp_name_uz; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $outrelative->work; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $outrelative->living_place; ?>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<br><br>	
<p style="text-align: center;"><b>Ariza</b></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menga tegishli yuqoridagi ma`lumotlarni taqdim qilgan holda, O`zbekiston Respublikasi Prezidentidan O`zbekiston fuqaroligidan chiqishga ruxsat berishini so`rayman.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shu bilan birga, balog`at yoshiga yetmagan shahslarga men bilan fuqarolikdan chiqishlariga ruxsat berishingizni so`rayman:</p>
<table width="800" border="0" cellpadding="0" cellspacing="0" class="anketa-pdf" style="font-size: 15px;" style=" border-collapse: collapse;">
	<tr>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>F.I.Sh.</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Tug`ilgan vaqti</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Qarindoshlik aloqadorligi</p>
		</th>
		<th class="text-center" style="border: 1px solid black; padding:15px;">
			<p>Izoh</p>
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
				<?= $children->typeRelative->uz_type_relative; ?>
			</td>
			<td style="border: 1px solid black; padding:15px;">
				<?= $children->comment; ?>
			</td>			
		</tr>
	<?php endforeach;?>
</table><br>	
<p style=" font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quyidagi xujjatlar ilova qilinmoqda:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Ariza<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Anketa-ariza<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Tarjimai hol<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. O`zbekiston pasporti sahifalaridan nusxa<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Fuqarolikdan chiqishga turmush o`rtog`imning roziligi<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Mening yashash joy manzilim hamda telefon raqamim:</b><br>
	<?= $model->living_place ?> <?= $model->tel ?><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"______"&nbsp;&nbsp;___________________ 20____ y.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________________<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $model->surname; ?> <?= $model->name; ?> <?= $model->mname; ?>
</p>