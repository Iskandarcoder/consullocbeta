<?php $lang = Yii::$app->language;?>
<?php use yii\helpers\Url;?>
<div class="vibor container well well-lg">
  <h3><b><?= Yii::t('app', 'O`zbekiston Respublikasi fuqarolari uchun interaktiv xizmatlar'); ?></b></h3>
  <div class="k-uslugi">
    <div class="row">
      <div class="col-sm-3">
        <a href="<?= Url::to(['/anketa-new/index'])?>">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-file-text-o"></i>
            </div></br>
            <b><?= Yii::t('app', 'Sertifikat</br>olish'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'O`zbekiston<br/>Respublikasi<br/>fuqarolarining<br/>O`zbekiston<br/>Respublikasiga<br/>qaytish guvohnomasi'); ?>
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="<?= Url::to(['/vkus/index'])?>">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-vcard-o"></i>
            </div></br>
            <b><?= Yii::t('app', 'Vaqtincha konsullik</br>hisobi'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'O`zbekiston<br/>Respublikasi<br/>fuqarolarining xorijdagi<br/>konsullik<br/>muassasalarida vaqtincha<br/>konsullik hisobiga<br/>olish tartibi'); ?>                
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="<?= Url::to(['/kus/index'])?>">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-id-card-o"></i>
            </div></br>
            <b><?= Yii::t('app', 'Doimiy konsullik</br>hisobi'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'O`zbekiston<br/>Respublikasi<br/>fuqarolarining xorijdagi<br/>konsullik muassasalarida<br/>doimiy konsullik<br/>hisobiga olish<br/>tartibi'); ?>                  
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="<?= Url::to(['/docs/index'])?>">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-newspaper-o"></i>
            </div></br>
            <b><?= Yii::t('app', 'Hujjatlarni</br>olish'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'O`zbekiston<br/>Respublikasidan<br/>hujjatlarni so`rab<br/>olish tartibi'); ?>
              </div>
            </div>
          </button>
        </a>
      </div>  
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a href="?action=pasp">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-address-book-o fa-2x"></i>
            </div></br>
            <b><?= Yii::t('app', 'Pasportni</br>rasmiylashtirish'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'O`zbekiston<br/>Respublikasi<br/>fuqarosi biometrik<br/>pasportini<br/>rasmiylashtirish<br/>tartibi'); ?>                  
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="?action=smrt">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <img src="/images/dead.png" class="dead">
            </div></br>
            <b><?= Yii::t('app', 'O`lim haqidagi</br>guvohnoma'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'O`zbekiston<br/>Respublikasi<br/>fuqarosining o`limi<br/>to`g`risidagi<br/>guvohnomani<br/>rasmiylashtirish tartibi'); ?>                  
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="?action=rz">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-map-signs"></i>
            </div></br>
            <b><?= Yii::t('app', 'Xorijga vaqtincha</br>chiqish'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'Xorijga chiqsh uchun<br/>ruxsat yozuvini<br/>rasmiylashtirish (RE’Yo)<br/>tartibi'); ?>
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="<?= Url::to(['/pmj/create'])?>">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-map-marker"></i>
            </div></br>
            <b><?= Yii::t('app', 'Xorijda doimiy</br>yashash'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'Xorijga doimiy<br/>yashashga chiqish<br/>yozuvini rasmiylashtirish<br/>(DYa)'); ?>
              </div>
            </div>
          </button>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3 col-md-offset-1-and-half">
        <a href="<?= Url::to(['/citizenship/create'])?>">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-share-square-o"></i>
            </div></br>
            <b><?= Yii::t('app', 'Fuqarolikdan</br>chiqish'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'O`zbekiston<br/>Respublikasi<br/>fuqaroligidan chiqishni<br/>rasmiylashtirish'); ?>
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="?action=ngraj">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-user-secret"></i>
            </div></br>
            <b><?= Yii::t('app', 'Fuqarolikni</br>tekshirish'); ?></b>
            <div class="overlay">
              <div class="text"><?= Yii::t('app', 'O`zbekiston Respublikasi<br/>fuqaroligiga<br/>mansub-mansub<br/>emaslikni aniqlash<br/>tartibi'); ?>
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="?action=apost">
          <button type="button" class="btn btn-labeled btn-lg">
            <div class="btn-label">
              <i class="fa fa-4x fa-file-photo-o"></i>
            </div></br>
            <b><?= Yii::t('app', 'Apostil</br>qo`yish'); ?></b>
            <div class="overlay">
              <div class="text">
                <?= Yii::t('app', 'Apostil qo`yish va<br/>hujjatlarni legallashtirish'); ?>
              </div>
            </div>
          </button>
        </a>
      </div>
    </div>
  </div>

  <input  id="ses_name" type="hidden"  value = "<?php  echo $_SESSION['login'];?>" />  
</div>
<?php
  $this->registerJs("$(document).ready(function($){
    User_Session();
      $('#Chiqish').click( function(){
      $.ajax({
        type: 'POST',
        url:  '/uz/Chiqish.php',
        success: function(){
          $('#ses_name').val('');
          User_Session();
        }
      });
    }); 
  })");
?>