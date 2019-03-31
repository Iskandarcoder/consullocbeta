<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employment".
 *
 * @property integer $id
 * @property integer $pmj_id
 * @property string $start_date
 * @property string $end_date
 * @property string $position
 * @property string $place
 */
class Employment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pmj_id'], 'integer'],
            [['start_date', 'end_date'], 'string', 'max' => 15],
            [['position', 'place'], 'string', 'max' => 100],
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
            'start_date' => Yii::t('app', 'Boshlanish sanasi'),
            'end_date' => Yii::t('app', 'Tugash sanasi'),
            'position' => Yii::t('app', 'Vazirlik (idoralar) ning ko\'rsatmalari bilan ish joyi va aniq nomlanishi'),
            'place' => Yii::t('app', 'Korxona, muassasa, tashkilotning manzili'),
        ];
    }
}
