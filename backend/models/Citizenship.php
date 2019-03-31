<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "citizenship".
 *
 * @property int $id
 * @property string $guide
 * @property string $surname
 * @property string $name
 * @property string $mname
 * @property string $pre_surname
 * @property string $pre_name
 * @property string $pre_mname
 * @property string $birth_date
 * @property int $nationality_id
 * @property int $study_id
 * @property int $profession
 * @property int $marital_id
 * @property string $marital_name
 * @property string $marital_bdate
 * @property int $marital_nation
 * @property string $marital_place
 * @property string $court
 * @property string $army
 * @property string $army_now
 * @property string $medal
 * @property string $pmj
 * @property string $last_place
 * @property string $visit_uzb
 * @property string $business
 * @property int $citizenship_id
 * @property string $cause
 * @property string $living_place
 * @property string $tel
 * @property string $file1
 * @property string $file2
 * @property string $file3
 * @property string $file4
 * @property int $status_id
 * @property string $comment
 * @property int $division_id
 */

class Citizenship extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'citizenship';
    }

    /**
     * {@inheritdoc}
     */

    public $verifyCode;

        public $file;
        public $photo1;
        public $photo2;
        public $photo3;
        public $photo4;



    public function rules()
    {
        return [
            [['mail', 'guide', 'surname', 'name', 'mname', 'birth_date', 'nationality_id', 'study_id', 'profession', 'marital_id', 'court', 'army', 'army_now', 'medal', 'pmj', 'last_place', 'visit_uzb', 'business', 'citizenship_id', 'cause', 'living_place', 'tel', 'file1', 'file2', 'file3', 'file4', 'division_id', 'photo'], 'required'],
            [['birth_date', 'marital_bdate'], 'safe'],
            [['nationality_id', 'study_id', 'marital_id', 'marital_nation', 'citizenship_id', 'status_id', 'division_id'], 'integer'],
            [['mail'], 'string', 'max' => 30],  
            [['file1', 'file2', 'file3', 'file4', 'photo'], 'string'],
            [['guide'], 'string', 'max' => 35],
            [['profession'], 'string', 'max' => 50],            
            [['surname', 'name', 'mname', 'pre_surname', 'pre_name', 'pre_mname', 'social_status','marital_name', 'tel'], 'string', 'max' => 20],
            [['marital_place', 'last_place', 'cause', 'living_place'], 'string', 'max' => 200],
            [['court', 'army', 'army_now', 'pmj', 'visit_uzb', 'business', 'comment'], 'string', 'max' => 500],
            [['medal'], 'string', 'max' => 100],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'guide' => 'Guide',
            'surname' => Yii::t('app', 'Familiya'),
            'name' => Yii::t('app', 'Ismi'),
            'mname' => Yii::t('app', 'Otasining ismi'),
            'pre_surname' => Yii::t('app', 'Oldingi familiyasi'),
            'pre_name' => Yii::t('app', 'Oldingi ismi'),
            'pre_mname' => Yii::t('app', 'Otasining oldingi ismi'),
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'nationality_id' => Yii::t('app', 'Millati'),
            'study_id' => Yii::t('app', 'Ma`lumoti'),
            'profession' => Yii::t('app', 'Kasbi'),
            'marital_id' => Yii::t('app', 'Oilaviy holati'),
            'marital_name' => Yii::t('app', 'Turmush o`rtog`ining F.I.Sh.'),
            'marital_bdate' => Yii::t('app', 'Turmush o`rtog`ining tug`ilgan vaqti'),
            'marital_nation' => Yii::t('app', 'Turmush o`rtog`ining fuqaroligi'),
            'marital_place' => Yii::t('app', 'Turmush o`rtog`ining yashash joyi'),
            'social_status' => Yii::t('app', 'Ijtimoiy maqomi'),
            'court' => Yii::t('app', 'Sud yoki tergov jarayoniga jalb qilinganligi'),
            'army' => Yii::t('app', 'Harbiy xizmat o`taganmi'),
            'army_now' => Yii::t('app', 'Harbiy xizmatga hozirdagi aloqadorligi'),
            'medal' => Yii::t('app', 'Faxriy unvon va Davlat mukofotlari bormi'),
            'pmj' => Yii::t('app', 'Doimiy yashash uchun O`zbekiston hududini qachon tark etgan'),
            'last_place' => Yii::t('app', 'O`zbekiston hududida oxirgi yashash joyi'),
            'visit_uzb' => Yii::t('app', 'O`zbekistonga bo`lgan tashriflari'),
            'business' => Yii::t('app', 'Kasbi: qayerda va qaysi lavozimda ishlaydi'),
            'citizenship_id' => Yii::t('app', 'Qaysi davlat fuqaroligini olmoqchi'),
            'cause' => Yii::t('app', 'O`zbekiston Respublikasi fuqaroligidan chiqish sababi'),
            'living_place' => Yii::t('app', 'Yashash joy manzili'),
            'tel' => Yii::t('app', 'Telefon'),
            'mail' => Yii::t('app', 'E-mail'), 
            'photo1' => Yii::t('app', 'Ariza nusxasi'),
            'photo2' => Yii::t('app', 'Tarjimai hol nusxasi'),
            'photo3' => Yii::t('app', 'O`zbekiston pasporti sahifalaridan nusxa'),
            'photo4' => Yii::t('app', 'Fuqarolikdan chiqishiga turmush o`rtog`ining roziligi nusxasi'),
            'status_id' => Yii::t('app', 'Holati'), 
            'comment' => Yii::t('app', 'Sharh'), 
            'division_id' => Yii::t('app', 'Diplomatik vakolatxonalar'), 
            'file' => Yii::t('app', 'Rasm'),
        ];
    }

    public function setRandomString($length = 32)
    {
        $characters = '123456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $this->guide = $randomString;
    }

     public function getInrelative()
    {
        return $this->hasMany(InrelativePmj::className(), ['citizenship_id' => 'id']);
    }

    public function getOutrelative()
    {
        return $this->hasMany(OutrelativePmj::className(), ['citizenship_id' => 'id']);
    }

    public function getChildren()
    {
        return $this->hasMany(Children::className(), ['citizenship_id' => 'id']);
    }

     public function getSpNation()
    {
        return $this->hasOne(SpNationyii::className(), ['sp_id' => 'nationality_id']);
    }

     public function getSpCountry()
    {
        return $this->hasOne(SpCountryyii::className(), ['sp_id' => 'citizenship_id']);
    }

     public function getSpCountry2()
    {
        return $this->hasOne(SpCountryyii::className(), ['sp_id' => 'second_cityzenship_id']);
    }

     public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

     public function getSpDivision()
    {
        return $this->hasOne(SpDivisionyii::className(), ['sp_id' => 'division_id']);
    }

    public function getEducation()
    {
        return $this->hasOne(Education::className(), ['id' => 'study_id']);
    }

    public function getSpMarital()
    {
        return $this->hasOne(SpMaritalyii::className(), ['id' => 'marital_id']);
    }

    public function getTypeRelative()
    {
        return $this->hasOne(TypeRelative::className(), ['id' => 'relative']);
    }
}
