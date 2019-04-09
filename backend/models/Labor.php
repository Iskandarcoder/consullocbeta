<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "labor".
 *
 * @property int $id
 * @property int $loss_id
 * @property string $begin_date
 * @property string $end_date
 * @property string $work
 */
class Labor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'labor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[], 'required'],
            [['loss_id'], 'integer'],
            [['begin_date', 'end_date'], 'string', 'max' => 20],
            [['work'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'loss_id' => 'Loss ID',
            'begin_date' => Yii::t('app', 'Boshlanish sanasi'),
            'end_date' => Yii::t('app', 'Tugash sanasi'),
            'work' => Yii::t('app', 'Ish joyi va lavozimi'),
        ];
    }
}
