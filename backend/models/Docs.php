<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "docs".
 *
 * @property integer $id
 * @property string $guide
 * @property string $surname
 * @property string $name
 * @property string $mname
 * @property string $pre_surname
 * @property string $pre_name
 * @property string $pre_mname
 * @property string $birth_date
 * @property string $birth_place
 * @property integer $nation_id
 * @property string $citizenship_id
 * @property integer $type_id
 * @property string $type_place
 * @property string $type_date
 * @property string $fio_father
 * @property string $fio_mother
 * @property string $study_name
 * @property string $study_place
 * @property string $study_start_date
 * @property string $study_end_date
 * @property string $pension_reason
 * @property string $pension_date
 * @property string $pension_org
 * @property string $last_cost
 * @property string $last_cost_org
 * @property string $doc_target
 * @property string $living_place
 * @property integer $tel
 * @property integer $fax
 * @property string $sec_name
 * @property string $sec_surname
 * @property string $sec_mname
 * @property string $sec_birthplace
 * @property string $sec_birthdate
 * @property string $sec_citizenship_id
 * @property string $relative
 * @property string $sec_livingplace
 * @property integer $sec_tel
 * @property integer $sec_fax
 * @property string $scan_file
 * @property integer $status_id
 * @property string $pre_citizenship_id
 * @property string $comment
 * @property integer $division_id
 * @property string $email
 */
class Docs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public $verifyCode;

    public static function tableName()
    {
        return 'docs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {     //'type_place', 'type_date',
        return [
            [['surname', 'name', 'mname', 'birth_date', 'birth_place', 'nation_id', 'citizenship_id', 'type_id',  'doc_target', 'living_place', 'tel', 'scan_file', 'division_id', 'email', ], 'required'],
            [['birth_date', 'type_date', 'study_start_date', 'study_end_date', 'citizenship_id', 'pre_citizenship_id', 'sec_citizenship_id', 'pension_date', 'sec_birthdate'], 'safe'],
            [['nation_id', 'type_id', 'sec_tel', 'sec_fax', 'status_id', 'division_id' ], 'integer'],
            [['scan_file'], 'string'],
            [['file'], 'file'],
            [['surname', 'name', 'mname', 'pre_surname', 'pre_name', 'pre_mname', 'fio_father', 'fio_mother', 'study_name', 'pension_reason', 'pension_org', 'last_cost', 'last_cost_org', 'doc_target', 'sec_name', 'sec_surname', 'sec_mname', 'relative', 'email', 'tel', 'fax'], 'string', 'max' => 50],
            [['birth_place', 'type_place', 'study_place', 'living_place', 'sec_birthplace', 'sec_livingplace'], 'string', 'max' => 100],
            [['guide'], 'string', 'max' => 35],

            [['comment'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'guide' => 'Guide',
            'surname' => Yii::t('app', 'Familiyasi'),
            'name' => Yii::t('app', 'Ismi'),
            'mname' => Yii::t('app', 'Sharifi'),
            'pre_surname' => Yii::t('app', 'Avvalgi familiyasi (o\'zgargan bo\'lsa)'),
            'pre_name' => Yii::t('app', 'Avvalgi ismi (o\'zgargan bo\'lsa)'),
            'pre_mname' => Yii::t('app', 'Avvalgi sharifi (o\'zgargan bo\'lsa)'),
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'birth_place' => Yii::t('app', 'Tug\'ilgan joyi (viloyat,tuman,shahar,qishloq)'),
            'nation_id' => Yii::t('app', 'Millati'),
            'citizenship_id' => Yii::t('app', 'Fuqaroligi'),
            'type_id' => Yii::t('app', 'Talab qilinayotgan hujjat turi'),
            'type_place' => Yii::t('app', 'Ro`yxatga olingan joyi'),
            'type_date' => Yii::t('app', 'Ro`yxatga olingan sanasi'),
            'fio_father' => Yii::t('app', 'Otasining F.I.SH.'),
            'fio_mother' => Yii::t('app', 'Onasining F.I.SH.'),
            'study_name' => Yii::t('app', 'Ta\'lim muassasasining nomi'),
            'study_place' => Yii::t('app', 'Ta\'lim muassasasining manzili'),
            'study_start_date' => Yii::t('app', 'Ta\'lim muassasasiga kirgan sanasi'),
            'study_end_date' => Yii::t('app', 'Ta\'lim muassasasini bitirgan sanasi'),
            'pension_reason' => Yii::t('app', 'Nafaqa belgilanganligi sababi'),
            'pension_date' => Yii::t('app', 'Nafaqa belgilangan sana'),
            'pension_org' => Yii::t('app', 'Nafaqa belgilagan tashkilot'),
            'last_cost' => Yii::t('app', 'Oxirgi to\'langan nafaqa sanasi'),
            'last_cost_org' => Yii::t('app', 'Oxirgi nafaqa to\'lagan  tashkilot'),
            'doc_target' => Yii::t('app', 'Hujjat nima maqsadda talab qilinmoqda'),
            'living_place' => Yii::t('app', 'Yashash joyining aniq manzili'),
            'tel' => Yii::t('app', 'Telefon raqami'),
            'fax' => Yii::t('app', 'Faks raqami'),
            'sec_name' => Yii::t('app', 'Ismingiz'),
            'sec_surname' => Yii::t('app', 'Familiyangiz'),
            'sec_mname' => Yii::t('app', 'Sharifingiz'),
            'sec_birthplace' => Yii::t('app', 'Tug\'ilgan joyingiz'),
            'sec_birthdate' => Yii::t('app', 'Tug\'ilgan sanangiz'),
            'sec_citizenship_id' => Yii::t('app', 'Fuqaroligingiz'),
            'relative' => Yii::t('app', 'Hujjat talab qilinayotgan shaxsga qarindoshlik aloqangiz'),
            'sec_livingplace' => Yii::t('app', 'Yashash joyingizni aniq manzili'),
            'sec_tel' => Yii::t('app', 'Telefon raqamingiz'),
            'sec_fax' => Yii::t('app', 'Faks raqamingiz'),
            'file' => Yii::t('app', 'Pasport nusxasi'),
            'pre_citizenship_id' => Yii::t('app', 'Avvalgi fuqaroligi (o\'zgargan bo\'lsa)'),
            'email' => Yii::t('app','E-mail'),
            'division_id' => Yii::t('app','Elchixona'),
            'status_id' => Yii::t('app','Holati'),
            'comment' => Yii::t('app','Izoh'),
        ];
    }


    public function setRandomString($length = 32)

    {

        $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ123456789';

        $charactersLength = strlen($characters);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {

            $randomString .= $characters[rand(0, $charactersLength - 1)];

        }

        $this->guide = $randomString;

    }


    //  public function getCountry()
    // {
    //     return $this->hasOne(SpCountry::className(), ['sp_id' => 'citizenship_id']);
    // }

     public function getSpDoc_type()
    {
        return $this->hasOne(SpDoc_type::className(), ['sp_id' => 'type_id']);
    }

    public function getNation()
    {
        return $this->hasOne(SpNationyii::className(), ['sp_id' => 'nation_id']);
    }

         public function getDocsStatus()
    {
        return $this->hasOne(DocsStatus::className(), ['id' => 'division_id']);
    }

    public function getSpNation()
    {
        return $this->hasOne(SpNationyii::className(), ['sp_id' => 'nation_id']);
    }

    public function getSpDivision()
    {
        return $this->hasOne(SpDivisionyii::className(), ['sp_id' => 'nation_id']);
    }

     public function getCitizenship()
    {
        return $this->hasOne(SpCountryyii::className(), ['sp_id' => 'citizenship_id']);
    }

     public function getCitizenship2()
    {
        return $this->hasOne(SpCountryyii::className(), ['sp_id' => 'pre_citizenship_id']);
    }

     public function getCitizenship3()
    {
        return $this->hasOne(SpCountryyii::className(), ['sp_id' => 'sec_citizenship_id']);
    }


}
