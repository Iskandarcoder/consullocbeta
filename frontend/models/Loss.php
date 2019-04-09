<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "loss".
 *
 * @property int $id
 * @property string $guide
 * @property string $surname
 * @property string $name
 * @property string $mname
 * @property string $pre_mname
 * @property string $living_place
 * @property int $cause_id
 * @property string $tel
 * @property int $counrtry_id
 * @property string $date
 * @property string $city
 * @property string $birt_date
 * @property string $birth_place
 * @property int $citizenship_id
 * @property int $nationality_id
 * @property int $education_id
 * @property string $court
 * @property int $marital_id
 * @property string $wedding_date
 * @property string $marital_surname
 * @property string $marital_name
 * @property string $marital_mname
 * @property string $marital_bdate
 * @property string $children
 * @property int $pmj_id
 * @property string $passport
 * @property string $photo
 * @property int $status_id
 * @property string $comment
 */

class Loss extends \backend\models\Loss
{
    /**
     * {@inheritdoc}
     */
    public $verifyCode;

    public static function tableName()
    {
        return 'loss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'mname','living_place', 'cause_id', 'tel', 'date', 'city', 'birt_date', 'birth_place', 'citizenship_id', 'nationality_id', 'education_id', 'court', 'marital_id', 'pmj_id', 'passport', 'photo', 'mail', 'last_place', 'division_id', 'enter_date'], 'required'],
            [['cause_id', 'country_id', 'citizenship_id', 'nationality_id', 'education_id', 'marital_id', 'pmj_id', 'status_id', 'division_id'], 'integer'],
            [['date', 'birt_date', 'wedding_date', 'marital_bdate', 'enter_date'], 'safe'],
            [['passport', 'photo'], 'string'],
            [['guide'], 'string', 'max' => 35],
            [['mail'], 'string', 'max' => 30],
            [['surname', 'name', 'mname', 'pre_mname', 'tel', 'city', 'marital_fio'], 'string', 'max' => 50],
            [['living_place', 'birth_place', 'court'], 'string', 'max' => 200],
            [['last_place'], 'string', 'max' => 100],
            [['comment'], 'string', 'max' => 500],
            [['file','file1'],'file'],             
            ['verifyCode', 'captcha'],            
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
            'pre_mname' => Yii::t('app', 'Oldingi familiyasi'),
            'living_place' => Yii::t('app', 'Doimiy yashash manzili'),
            'cause_id' => Yii::t('app', 'Fuqarolikni yo`qotganiga sabab'),
            'name' => Yii::t('app', 'Ismi'),
            'tel' => Yii::t('app', 'Telefon'),
            'country_id' => Yii::t('app', 'Sabab ro`y bergan mamlakat'),
            'date' => Yii::t('app', 'Ushbu anketa to`ldirilgan sana'),
            'city' => Yii::t('app', 'Ushbu anketa to`ldirilgan shahar'),
            'birt_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'birth_place' => Yii::t('app', 'Tug\'ilgan joyi'),
            'citizenship_id' => Yii::t('app', 'Fuqaroligi'),
            'nationality_id' => Yii::t('app', 'Millati'),
            'education_id' => Yii::t('app', 'Ma`lumoti'),
            'court' => Yii::t('app', 'Sudlangan/sudlanmagani'),
            'marital_id' => Yii::t('app', 'Oilaviy holati'),
            'education_id' => Yii::t('app', 'Ma`lumoti'),
            'wedding_date' => Yii::t('app', 'Turmush qurgan sanasi'),
            'marital_fio' => Yii::t('app', 'Turmush o`rtog`ining F.I.Sh'),
            'marital_bdate' => Yii::t('app', 'Turmush o`rtog`ining tug`ilgan sanasi'),
            'last_place' => Yii::t('app', 'O`zbekiston Respublikasidagi ohirgi yashash manzili'),
            'pmj_id' => Yii::t('app', 'Doimiy ro`yhatga chiqqan mamlakat'),
            'file1' => Yii::t('app', 'Pasportning hamma betlaridan nusxa'),
            'file' => Yii::t('app', 'Fotosurat'),
            'status_id' => Yii::t('app', 'Holati'),
            'comment' => Yii::t('app', 'Sharh'),
            'mail' => Yii::t('app', 'E-mail'),
            'enter_date' => Yii::t('app', 'Kelgan sanasi'),
            'verifyCode' => Yii::t('app', 'Tekshirish kodi'),
            'division_id' => Yii::t('app', 'Diplomatik vakolatxonalar'),


        ];
    }
}
