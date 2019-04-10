<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cause".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 */
class Cause extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cause';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru'], 'required'],
            [['name_uz', 'name_ru'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
        ];
    }
}
