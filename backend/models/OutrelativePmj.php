<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "outrelative_pmj".
 *
 * @property int $id
 * @property int $citizenship_id
 * @property string $fio
 * @property string $relative
 * @property string $birth_date
 * @property string $birth_place
 * @property int $nationality_id
 * @property int $citizenship
 * @property string $work
 * @property string $living_place
 */
class OutrelativePmj extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outrelative_pmj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['citizenship_id'], 'required'],
            [['citizenship_id', 'nationality_id', 'citizenship'], 'integer'],
            [['fio'], 'string', 'max' => 60],
            [['relative', 'birth_date'], 'string', 'max' => 20],
            [['birth_place'], 'string', 'max' => 100],
            [['work', 'living_place'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'citizenship_id' => 'Citizenship ID',
            'fio' => Yii::t('app', 'Familiya, ism, sharifi'),
            'relative' => Yii::t('app', 'Qarindoshlik darajasi'),
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'birth_place' => Yii::t('app', 'Tug\'ilgan joyi'),
            'nationality_id' => Yii::t('app', 'Millati'),
            'citizenship' => Yii::t('app', 'Fuqaroligi'),
            'work' => Yii::t('app', 'Ish joyi, mutaxassisligi'),
            'living_place' => Yii::t('app', 'Yashash joyi manzili'),
        ];
    }

     public function getTypeRelative()
    {
        return $this->hasOne(TypeRelative::className(), ['id' => 'relative']);
    }

     public function getSpNation()
    {
        return $this->hasOne(SpNationyii::className(), ['sp_id' => 'nationality_id']);
    }

     public function getSpCountry()
    {
        return $this->hasOne(SpCountryyii::className(), ['sp_id' => 'citizenship']);
    }
    
}
