<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "children".
 *
 * @property int $id
 * @property int $citizenship_id
 * @property string $fio
 * @property string $birth_date
 * @property string $relative
 * @property string $comment
 */
class Children extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'children';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['citizenship_id'], 'required'],
            [['citizenship_id'], 'integer'],
            [['birth_date'], 'safe'],
            [['fio'], 'string', 'max' => 60],
            [['relative'], 'string', 'max' => 20],
            [['comment'], 'string', 'max' => 200],
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
            'birth_date' => Yii::t('app', 'Tug\'ilgan sanasi'),
            'relative' => Yii::t('app', 'Qarindoshlik darajasi'),
            'comment' => Yii::t('app', 'Izoh'),
        ];
    }

      public function getTypeRelative()
    {
        return $this->hasOne(TypeRelative::className(), ['id' => 'relative']);
    }
}
