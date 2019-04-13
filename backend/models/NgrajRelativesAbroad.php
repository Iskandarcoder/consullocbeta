<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ngraj_relatives_abroad".
 *
 * @property int $id
 * @property string $fio
 * @property string $relation
 * @property string $birth_date
 * @property string $birth_place
 * @property int $citizenship_id
 * @property string $occupation
 * @property string $address
 */
class NgrajRelativesAbroad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ngraj_relatives_abroad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'relation', 'birth_date', 'birth_place', 'citizenship_id', 'occupation', 'address'], 'required'],
            [['birth_date'], 'safe'],
            [['citizenship_id'], 'integer'],
            [['fio'], 'string', 'max' => 70],
            [['relation', 'occupation'], 'string', 'max' => 50],
            [['birth_place', 'address'], 'string', 'max' => 100],
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
            'relation' => 'Relation',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'citizenship_id' => 'Citizenship ID',
            'occupation' => 'Occupation',
            'address' => 'Address',
        ];
    }
}
