<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "family".
 *
 * @property int $id
 * @property string $relation
 * @property int $loss_id
 * @property string $fio
 * @property string $birth_date
 * @property string $birth_place
 * @property int $citizenship_id
 * @property int $nationality_id
 * @property int $education_id
 * @property string $court
 * @property string $work
 * @property string $address
 * @property int $marital_id
 */
class Family extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'family';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[], 'required'],
            [['loss_id', 'citizenship_id', 'nationality_id', 'education_id', 'marital_id', 'relative'], 'integer'],
            [['fio'], 'string', 'max' => 80],
            [['birth_date'], 'string', 'max' => 20],
            [['birth_place', 'court', 'work', 'address'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'relative' => Yii::t('app', 'Qarindoshlik darajasi'),
            'loss_id' => 'Loss ID',
            'fio' => Yii::t('app', 'F.I.Sh'),
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'birth_place' => Yii::t('app', 'Tug\'ilgan joyi'),
            'citizenship_id' => Yii::t('app', 'Fuqaroligi'),
            'nationality_id' => Yii::t('app', 'Millati'),
            'education_id' => Yii::t('app', 'Ma`lumoti'),
            'court' => Yii::t('app', 'Sudlangan/sudlanmagani'),
            'work' => Yii::t('app', 'Ish joyi va lavozimi'),
            'address' => Yii::t('app', 'Yashash manzili'),
            'marital_id' => Yii::t('app', 'Oilaviy holati'),
        ];
    }
    public function getTypeRelative()
    {
        return $this->hasOne(TypeRelative::className(), ['id' => 'relative']);
    }

    public function getSpMarital()
    {
        return $this->hasOne(SpMaritalyii::className(), ['id' => 'marital_id']);
    }

    public function getEducation()
    {
        return $this->hasOne(Education::className(), ['id' => 'education_id']);
    }

    public function getSpNation()
    {
        return $this->hasOne(SpNationyii::className(), ['sp_id' => 'nationality_id']);
    }

      public function getSpCountry()
    {
        return $this->hasOne(SpCountryyii::className(), ['sp_id' => 'citizenship_id']);
    }
}
