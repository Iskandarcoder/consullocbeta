<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kus-index">

  
<div class="vku_doc container well well-lg">
<h3>O`ZBEKISTON RESPUBLIKASIDAN HUJJATLARNI SO`RAB OLISH TARTIBI</h3>

<p>O`zbekiston Respublikasidan hujjatlarni so`rab olish uchun O`zbekiston Respublikasi fuqarolari, xorijiy fuqarolar va fuqarolikka ega bo`lmagan shaxslar bevosita O`zbekiston Respublikasi arxiv muassasalariga ham, shuningdek O`zbekiston Respublikasining xorijdagi diplomatik vakolatxonalariga va konsullik muassasalariga ham murojaat etishlari mumkin.</p>
<P><b>O`zbekiston Respublikasining xorijdagi diplomatik vakolatxonasiga yoki konsullik muassasasiga murojaat etuvchi shaxs har bir so`rab olinayotgan hujjat uchun alohida belgilangan shakldagi maxsus anketani ikki nusxada to`ldirishi, shuningdek konsullik yig`imini, hamda amaldagi xarajatlarni qoplash yig`imini to`lashi shart.</b></P>
<p><b>Mehnat va pensiya daftarchalari, harbiy biletlarning asl nusxalarini so`rab olish, jo`natib yuborish yoki xorijga chaqirtirib olishga yo`l qo`yilmaydi.</b></p>
<p><b>Shuningdek, agar nikoh bekor qilingan bo`lsa, nikohdan o`tganlik to`g`risidagi guvohnomani, shuningdek vafot etgan shaxsning tug`ilganlik to`g`risidagi guvohnomasini qaytadan so`rab olinishi mumkin emas. Voyaga yetmagan shaxslarning tug`ilganlik to`g`risidagi guvohnomalari ularning qonuniy vakillari tomonidan so`rab olinishi mumkin. Vafot etganlik to`g`risidagi guvohnomalar vafot etgan shaxsning qarindoshlari yoki yuridik shaxslar tomonidan rasmiy maqsadlar uchun so`rab olinishi mumkin.</b></p>
<p>Amaliyotning ko`rsatishicha, ma`lumot to`g`risidagi hujjatlarni (attestatlar, diplomlar va ulardan ko`chirmalarni) O`zbekiston Respublikasidan so`rab olishda manfaatdor shaxslarning bevosita o`quv muassasasiga murojaat etishi bir muncha samarali natija beradi. Buning uchun shaxsiy ishni arxivlardan izlab topish, hujjatning dublikatini tayyorlash, shahodatlash va arizachiga jo`natib yuborish bilan bog`liq barcha xarajatlarning qoplanishi shart bo`ladi.</p>
<p>Har bir hujjat uchun arizachining pasporti nusxasini taqdim qilgan holda ikki nusxada to`ldiriladi.</p>
<p>Savollarga javoblar to`liq va aniq bo`lishi kerak.</p>

<p><a href="http://consul.mfa.uz/uz/reglament/istreb_uz.pdf">Interaktiv xizmat reglamenti</a></p>
<p><a href="http://consul.mfa.uz/uz/reglament/form_3.doc">Anketani yuklab olish</a></p>

<hr />
<br />
<br />



<input type="checkbox" id="chk_inst" name="chk_inst" onclick = "InstNext('vvod_pku')";/>
<label for="chk_inst"><span></span> - Yo`riqnoma bilan tanishdim</label>
            

                   <br />
                  <div class="text-center">
                    <button id="next" class="btn btn-info btn-lg" disabled=true onclick=location.href="<?= Url::to(['/docs/create'])?>"> Davom etish</button>
                  </div>
       </div>           
                  
                  
    <script type="text/javascript">
  $(document).ready(function($)
   {
    
      function InstNextPku()  {
    link2="location.href='?action=vvod_pku'";
  if ($('#chk_inst').is(':checked'))
      {
      $("#next").attr("onClick",link2);
      $('#next').attr('disabled',false);                      
       }
     else
     {
          $('#next').attr('disabled','disabled');              
     }
  };
    });
   </script>    
   
   

</div>
