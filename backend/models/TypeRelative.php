<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "type_relative".
 *
 * @property int $id
 * @property string $uz_type_relative
 * @property string $ru_type_relative
 */
class TypeRelative extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_relative';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uz_type_relative', 'ru_type_relative'], 'required'],
            [['uz_type_relative', 'ru_type_relative'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uz_type_relative' => 'Uz Type Relative',
            'ru_type_relative' => 'Ru Type Relative',
        ];
    }
}
