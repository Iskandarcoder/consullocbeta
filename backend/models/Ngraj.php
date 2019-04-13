<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ngraj".
 *
 * @property int $id
 * @property string $guide
 * @property string $name
 * @property string $pre_name
 * @property string $surname
 * @property string $pre_surname
 * @property string $mname
 * @property string $pre_mname
 * @property string $birth_date
 * @property string $birth_place
 * @property int $nation_id
 * @property int $marital_status_id
 * @property string $consent_other_parent
 * @property string $education
 * @property string $conviction
 * @property string $conviction_date
 * @property string $conviction_bywhom
 * @property string $conviction_reason
 * @property string $army
 * @property string $army_branch
 * @property string $army_date_start
 * @property string $army_date_end
 * @property string $army_place
 * @property string $army_status
 * @property string $last_uzb_address
 * @property string $doc_left_type
 * @property string $doc_series
 * @property int $doc_number
 * @property string $doc_date
 * @property string $doc_bywhom
 * @property int $citizenship_take_id
 * @property string $reason_not_take
 * @property int $relatives_uzb_id
 * @property int $relatives_abroad_id
 * @property string $last_work_uzb
 * @property string $address
 * @property string $tel
 * @property string $email
 * @property string $passport_series
 * @property int $passport_number
 * @property string $cur_date
 * @property int $children_id
 */
class Ngraj extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ngraj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['guide', 'name', 'pre_name', 'surname', 'pre_surname', 'mname', 'pre_mname', 'birth_date', 'birth_place', 'nation_id', 'marital_status_id', 'consent_other_parent', 'education', 'conviction', 'conviction_date', 'conviction_bywhom', 'conviction_reason', 'army', 'army_branch', 'army_date_start', 'army_date_end', 'army_place', 'army_status', 'last_uzb_address', 'doc_left_type', 'doc_series', 'doc_number', 'doc_date', 'doc_bywhom', 'citizenship_take_id', 'reason_not_take', 'relatives_uzb_id', 'relatives_abroad_id', 'last_work_uzb', 'address', 'tel', 'email', 'passport_series', 'passport_number', 'cur_date', 'children_id'], 'required'],
            [['birth_date', 'conviction_date', 'army_date_start', 'army_date_end', 'doc_date', 'cur_date'], 'safe'],
            [['nation_id', 'marital_status_id', 'doc_number', 'citizenship_take_id', 'relatives_uzb_id', 'relatives_abroad_id', 'passport_number', 'children_id'], 'integer'],
            [['guide'], 'string', 'max' => 255],
            [['name', 'pre_name', 'surname', 'pre_surname', 'mname', 'pre_mname', 'consent_other_parent', 'conviction', 'conviction_reason', 'army', 'army_status', 'doc_left_type', 'tel', 'email'], 'string', 'max' => 50],
            [['birth_place', 'education', 'conviction_bywhom', 'army_branch', 'army_place', 'last_uzb_address', 'doc_bywhom', 'reason_not_take', 'last_work_uzb', 'address'], 'string', 'max' => 100],
            [['doc_series', 'passport_series'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'guide' => 'Guide',
            'name' => 'Name',
            'pre_name' => 'Pre Name',
            'surname' => 'Surname',
            'pre_surname' => 'Pre Surname',
            'mname' => 'Mname',
            'pre_mname' => 'Pre Mname',
            'birth_date' => 'Birth Date',
            'birth_place' => 'Birth Place',
            'nation_id' => 'Nation ID',
            'marital_status_id' => 'Marital Status ID',
            'consent_other_parent' => 'Consent Other Parent',
            'education' => 'Education',
            'conviction' => 'Conviction',
            'conviction_date' => 'Conviction Date',
            'conviction_bywhom' => 'Conviction Bywhom',
            'conviction_reason' => 'Conviction Reason',
            'army' => 'Army',
            'army_branch' => 'Army Branch',
            'army_date_start' => 'Army Date Start',
            'army_date_end' => 'Army Date End',
            'army_place' => 'Army Place',
            'army_status' => 'Army Status',
            'last_uzb_address' => 'Last Uzb Address',
            'doc_left_type' => 'Doc Left Type',
            'doc_series' => 'Doc Series',
            'doc_number' => 'Doc Number',
            'doc_date' => 'Doc Date',
            'doc_bywhom' => 'Doc Bywhom',
            'citizenship_take_id' => 'Citizenship Take ID',
            'reason_not_take' => 'Reason Not Take',
            'relatives_uzb_id' => 'Relatives Uzb ID',
            'relatives_abroad_id' => 'Relatives Abroad ID',
            'last_work_uzb' => 'Last Work Uzb',
            'address' => 'Address',
            'tel' => 'Tel',
            'email' => 'Email',
            'passport_series' => 'Passport Series',
            'passport_number' => 'Passport Number',
            'cur_date' => 'Cur Date',
            'children_id' => 'Children ID',
        ];
    }
}
