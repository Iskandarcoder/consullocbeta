<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teenager".
 *
 * @property integer $id
 * @property integer $pmj_id
 * @property string $fio
 * @property string $birth_date
 * @property string $birth_place
 */
class Teenager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teenager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pmj_id'], 'integer'],
            [['fio'], 'string', 'max' => 50],
            [['birth_date'], 'string', 'max' => 15],
            [['birth_place'], 'string', 'max' => 100],
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
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'birth_place' => Yii::t('app', 'Tug\'ilgan joyi'),
        ];
    }
}
