<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ngraj_children".
 *
 * @property int $id
 * @property string $fio
 * @property string $birth_date
 * @property string $birth_place
 * @property string $relative
 */
class NgrajChildren extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ngraj_children';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'birth_date', 'birth_place', 'relative'], 'required'],
            [['birth_date'], 'safe'],
            [['fio', 'birth_place'], 'string', 'max' => 70],
            [['relative'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'relative' => 'Relative',
        ];
    }
}
