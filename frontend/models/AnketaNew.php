<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "anketa_new".
 *
 * @property int $p_id
 * @property string $p_guid
 * @property int $p_dockind
 * @property int $p_division
 * @property int $p_citizen
 * @property int $p_pk
 * @property string $p_surnamec
 * @property string $p_namec
 * @property string $p_patronymc
 * @property string $p_surnamel
 * @property string $p_namel
 * @property string $p_patronyml
 * @property string $p_birth
 * @property int $p_birthcomp
 * @property int $p_sex
 * @property int $p_nation
 * @property string $p_surnameold
 * @property string $p_nameold
 * @property string $p_patronymold
 * @property int $p_countryb
 * @property int $p_regionb
 * @property int $p_districtb
 * @property string $p_birthb
 * @property string $p_birthe
 * @property int $p_doctypeb
 * @property string $p_seryb
 * @property string $p_numberb
 * @property string $p_datebegb
 * @property string $p_issuedbyb
 * @property int $p_country
 * @property int $p_region
 * @property int $p_district
 * @property int $p_place
 * @property int $p_street
 * @property int $p_certiftype
 * @property string $p_house
 * @property string $p_korpus
 * @property string $p_flat
 * @property string $p_address
 * @property int $p_marital
 * @property string $p_dateendb
 * @property int $p_countryout
 * @property string $p_addressout
 * @property int $p_cause
 * @property int $p_reasonb
 * @property string $p_reasonfull
 * @property string $p_dateout
 * @property string $p_dateenter
 * @property string $p_photo
 * @property string $p_work
 * @property string $p_datesent
 * @property int $p_status
 * @property int $p_lan
 */
class AnketaNew extends backend\models\AnketaNew
{
    /**
     * {@inheritdoc}
     */
    public $verifyCode;
    public static function tableName()
    {
        return 'anketa_new';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_dockind', 'p_division', 'p_citizen', 'p_pk', 'p_birthcomp', 'p_sex', 'p_nation', 'p_countryb', 'p_regionb', 'p_districtb', 'p_doctypeb', 'p_country', 'p_region', 'p_district', 'p_place', 'p_street', 'p_certiftype', 'p_marital', 'p_countryout', 'p_cause', 'p_reasonb', 'p_status', 'p_lan'], 'integer'],
            [['p_surnamel', 'p_namel', 'p_patronyml', 'p_birth', 'p_birthcomp', 'p_countryb', 'p_cause'], 'required'],
            [['p_datebegb', 'p_dateendb', 'p_dateout', 'p_dateenter', 'p_datesent'], 'safe'],
            [['p_photo'], 'string'],
            [['p_guid', 'p_flat'], 'string', 'max' => 50],
            [['p_surnamec', 'p_namec', 'p_patronymc', 'p_surnamel', 'p_namel', 'p_patronyml', 'p_surnameold', 'p_nameold', 'p_patronymold'], 'string', 'max' => 75],
            [['p_birth'], 'string', 'max' => 10],
            [['p_birthb', 'p_birthe'], 'string', 'max' => 60],
            [['p_seryb', 'p_numberb'], 'string', 'max' => 15],
            [['p_issuedbyb'], 'string', 'max' => 150],
            [['p_house'], 'string', 'max' => 100],
            [['p_korpus'], 'string', 'max' => 5],
            [['p_address', 'p_addressout', 'p_reasonfull'], 'string', 'max' => 400],
            [['p_work'], 'string', 'max' => 128],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'p_guid' => 'P Guid',
            'p_dockind' => 'P Dockind',
            'p_division' => 'P Division',
            'p_citizen' => 'P Citizen',
            'p_pk' => 'P Pk',
            'p_surnamec' => 'P Surnamec',
            'p_namec' => 'P Namec',
            'p_patronymc' => 'P Patronymc',
            'p_surnamel' => 'P Surnamel',
            'p_namel' => 'P Namel',
            'p_patronyml' => 'P Patronyml',
            'p_birth' => 'P Birth',
            'p_birthcomp' => 'P Birthcomp',
            'p_sex' => 'P Sex',
            'p_nation' => 'P Nation',
            'p_surnameold' => 'P Surnameold',
            'p_nameold' => 'P Nameold',
            'p_patronymold' => 'P Patronymold',
            'p_countryb' => 'P Countryb',
            'p_regionb' => 'P Regionb',
            'p_districtb' => 'P Districtb',
            'p_birthb' => 'P Birthb',
            'p_birthe' => 'P Birthe',
            'p_doctypeb' => 'P Doctypeb',
            'p_seryb' => 'P Seryb',
            'p_numberb' => 'P Numberb',
            'p_datebegb' => 'P Datebegb',
            'p_issuedbyb' => 'P Issuedbyb',
            'p_country' => 'P Country',
            'p_region' => 'P Region',
            'p_district' => 'P District',
            'p_place' => 'P Place',
            'p_street' => 'P Street',
            'p_certiftype' => 'P Certiftype',
            'p_house' => 'P House',
            'p_korpus' => 'P Korpus',
            'p_flat' => 'P Flat',
            'p_address' => 'P Address',
            'p_marital' => 'P Marital',
            'p_dateendb' => 'P Dateendb',
            'p_countryout' => 'P Countryout',
            'p_addressout' => 'P Addressout',
            'p_cause' => 'P Cause',
            'p_reasonb' => 'P Reasonb',
            'p_reasonfull' => 'P Reasonfull',
            'p_dateout' => 'P Dateout',
            'p_dateenter' => 'P Dateenter',
            'p_photo' => 'P Photo',
            'p_work' => 'P Work',
            'p_datesent' => 'P Datesent',
            'p_status' => 'P Status',
            'p_lan' => 'P Lan',
        ];
    }
}
