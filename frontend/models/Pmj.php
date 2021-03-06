<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmj".
 *
 * @property int $id
 * @property string $guide
 * @property string $surname
 * @property string $name
 * @property string $mname
 * @property string $pre_surname
 * @property string $pre_name
 * @property string $pre_mname
 * @property int $nationality_id
 * @property string $mail
 * @property string $photo
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $birth_date
 * @property string $birth_place
 * @property string $living_place
 * @property string $tel
 * @property int $citizenship_id
 * @property int $second_cityzenship_id
 * @property string $seria_pasp
 * @property string $numb_pasp
 * @property string $pasp_date
 * @property string $pasp_place
 * @property string $reason
 * @property string $security
 * @property string $law_court
 * @property string $criminal
 * @property string $army
 * @property int $status_id
 * @property string $comment
 * @property int $division_id
 */

class Pmj extends \backend\models\Pmj
{
    /**
     * {@inheritdoc}
     */
    public $verifyCode;
    
    public static function tableName()
    {
        return 'pmj';
    }


    /**
     * {@inheritdoc}
     */
     public function rules()
    {
        return [
            [['surname', 'name', 'mname', 'nationality_id', 'birth_date', 'birth_place', 'living_place', 'tel', 'citizenship_id', 'seria_pasp', 'numb_pasp', 'pasp_date', 'pasp_place', 'reason', 'security', 'law_court', 'criminal', 'army','division_id'], 'required'],
            [['nationality_id', 'citizenship_id', 'second_cityzenship_id', 'numb_pasp', 'status_id','division_id'], 'integer'],
            [['birth_date', 'pasp_date'], 'safe'],
            [['tel', 'surname', 'name', 'mname', 'pre_surname', 'pre_name', 'pre_mname'], 'string', 'max' => 20],
            [['birth_place', 'living_place', 'pasp_place'], 'string', 'max' => 100],
            [['seria_pasp'], 'string', 'max' => 4],
            [['mail'], 'string', 'max' => 30],            
            [['guide'], 'string', 'max' => 35],
            [['comment'], 'string', 'max' => 500],
            [['reason', 'security', 'law_court', 'criminal', 'army', 'photo', 'photo1', 'photo2', 'photo3'], 'string', 'max' => 500],
            [['file','file1','file2','file3'],'file'],
            ['verifyCode', 'captcha'],            
        ];
    }

    /**
     * {@inheritdoc}
     */
   public function attributeLabels()
    {
        return [
            'surname' => Yii::t('app', 'Familiya'),
            'name' => Yii::t('app', 'Ismi'),
            'mname' => Yii::t('app', 'Otasining ismi'),
            'pre_surname' => Yii::t('app', 'Oldingi familiyasi'),
            'pre_name' => Yii::t('app', 'Oldingi ismi'),
            'pre_mname' => Yii::t('app', 'Otasining oldingi ismi'),
            'nationality_id' => Yii::t('app', 'Millati'),
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'birth_place' => Yii::t('app', 'Tug\'ilgan joyi'),
            'living_place' => Yii::t('app', 'Doimiy yashash joyi (O\'zbekiston Respublikasidagi propiskasi)'),
            'tel' => Yii::t('app', 'Telefon'),
            'citizenship_id' => Yii::t('app', 'Fuqaroligi'),
            'second_cityzenship_id' => Yii::t('app', 'Agar bir vaqtda boshqa davlat fuqaroligiga ega bo\'lsa'),
            'seria_pasp' => Yii::t('app', 'Pasport seriyasi'),
            'numb_pasp' => Yii::t('app', 'Pasport nomeri'),
            'pasp_date' => Yii::t('app', 'Pasport berilgan sana'),
            'pasp_place' => Yii::t('app', 'Pasport olgan joyi'),
            'reason' => Yii::t('app', 'Ketishdan maqsad'),
            'security' => Yii::t('app', 'Ish (O\'qish, xizmat) davrida rasmiy ravishda davlat siriga kiradigan ma\'lumotlarga kirish huquqi berilganmi? Chet elga ketishning oldini olish uchun shartnoma majburiyatlari bormi?'),
            'law_court' => Yii::t('app', 'Sud tomonidan bajarilmagan majburiyatlar mavjudmi? Sudda fuqarolik da\'volari bormi?'),
            'criminal' => Yii::t('app', 'Jinoiy ish ochilganmi?'),
            'army' => Yii::t('app', 'Harbiy xizmatga majburmi?'),            
            'file' => Yii::t('app', 'Rasm'),
            'file1' => Yii::t('app','Pasport nusxasi'),
            'file2' => Yii::t('app','Tug`ilganlik haqida guvohnoma nusxasi'),
            'file3' => Yii::t('app','Xarbiy guvohnoma nusxasi'),  
            'division_id' => Yii::t('app', 'Diplomatik vakolatxonalar'), 
            'status_id' => Yii::t('app', 'Holati'),      
            'mail' => Yii::t('app', 'E-mail'),  
            'comment' => Yii::t('app', 'Sharh'),  
            'guide' =>  Yii::t('app', 'Guide'), 
            'verifyCode' => Yii::t('app', 'Kodni tekshiring'),   
        ];
    }
}
