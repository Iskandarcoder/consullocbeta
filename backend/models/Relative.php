<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "relative".
 *
 * @property integer $id
 * @property integer $pmj_id
 * @property string $fio
 * @property string $relative
 * @property string $birth
 * @property string $work
 * @property integer $adres
 */
class Relative extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relative';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pmj_id'], 'integer'],
            [['fio', 'relative'], 'string', 'max' => 50],
            [['birth', 'work','adres'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'pmj_id' => Yii::t('app', 'Pmj ID'),
            'fio' => Yii::t('app', 'Familiya, ism, sharifi'),
            'relative' => Yii::t('app', 'Qarindoshlik darajasi, fuqaroligi'),
            'birth' => Yii::t('app', 'Tug\'ilgan sanasi, joyi'),
            'work' => Yii::t('app', 'Ish joyi, lavozimi'),
            'adres' => Yii::t('app', 'Yashash joyi, telefon raqami'),
        ];
    }
}
