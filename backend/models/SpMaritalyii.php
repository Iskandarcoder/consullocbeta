<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sp_maritalyii".
 *
 * @property int $id
 * @property string $sp_name00
 * @property string $sp_name_ru
 * @property string $sp_name02
 * @property string $sp_name03
 * @property string $sp_name_uz
 * @property string $sp_name05
 * @property int $sp_active
 * @property string $sp_dateenter
 * @property string $sp_scn
 * @property int $sp_idold
 * @property int $sp_idfirst
 */
class SpMaritalyii extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_maritalyii';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sp_active', 'sp_dateenter', 'sp_scn'], 'required'],
            [['id', 'sp_active', 'sp_scn', 'sp_idold', 'sp_idfirst'], 'integer'],
            [['sp_dateenter'], 'safe'],
            [['sp_name00', 'sp_name_ru', 'sp_name02', 'sp_name03', 'sp_name_uz', 'sp_name05'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sp_name00' => 'Sp Name00',
            'sp_name_ru' => 'Sp Name Ru',
            'sp_name02' => 'Sp Name02',
            'sp_name03' => 'Sp Name03',
            'sp_name_uz' => 'Sp Name Uz',
            'sp_name05' => 'Sp Name05',
            'sp_active' => 'Sp Active',
            'sp_dateenter' => 'Sp Dateenter',
            'sp_scn' => 'Sp Scn',
            'sp_idold' => 'Sp Idold',
            'sp_idfirst' => 'Sp Idfirst',
        ];
    }
}
