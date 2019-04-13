<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ngraj;

/**
 * NgrajSearch represents the model behind the search form of `backend\models\Ngraj`.
 */
class NgrajSearch extends Ngraj
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nation_id', 'marital_status_id', 'doc_number', 'citizenship_take_id', 'relatives_uzb_id', 'relatives_abroad_id', 'passport_number', 'children_id'], 'integer'],
            [['guide', 'name', 'pre_name', 'surname', 'pre_surname', 'mname', 'pre_mname', 'birth_date', 'birth_place', 'consent_other_parent', 'education', 'conviction', 'conviction_date', 'conviction_bywhom', 'conviction_reason', 'army', 'army_branch', 'army_date_start', 'army_date_end', 'army_place', 'army_status', 'last_uzb_address', 'doc_left_type', 'doc_series', 'doc_date', 'doc_bywhom', 'reason_not_take', 'last_work_uzb', 'address', 'tel', 'email', 'passport_series', 'cur_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ngraj::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'birth_date' => $this->birth_date,
            'nation_id' => $this->nation_id,
            'marital_status_id' => $this->marital_status_id,
            'conviction_date' => $this->conviction_date,
            'army_date_start' => $this->army_date_start,
            'army_date_end' => $this->army_date_end,
            'doc_number' => $this->doc_number,
            'doc_date' => $this->doc_date,
            'citizenship_take_id' => $this->citizenship_take_id,
            'relatives_uzb_id' => $this->relatives_uzb_id,
            'relatives_abroad_id' => $this->relatives_abroad_id,
            'passport_number' => $this->passport_number,
            'cur_date' => $this->cur_date,
            'children_id' => $this->children_id,
        ]);

        $query->andFilterWhere(['like', 'guide', $this->guide])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'pre_name', $this->pre_name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'pre_surname', $this->pre_surname])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'pre_mname', $this->pre_mname])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'consent_other_parent', $this->consent_other_parent])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'conviction', $this->conviction])
            ->andFilterWhere(['like', 'conviction_bywhom', $this->conviction_bywhom])
            ->andFilterWhere(['like', 'conviction_reason', $this->conviction_reason])
            ->andFilterWhere(['like', 'army', $this->army])
            ->andFilterWhere(['like', 'army_branch', $this->army_branch])
            ->andFilterWhere(['like', 'army_place', $this->army_place])
            ->andFilterWhere(['like', 'army_status', $this->army_status])
            ->andFilterWhere(['like', 'last_uzb_address', $this->last_uzb_address])
            ->andFilterWhere(['like', 'doc_left_type', $this->doc_left_type])
            ->andFilterWhere(['like', 'doc_series', $this->doc_series])
            ->andFilterWhere(['like', 'doc_bywhom', $this->doc_bywhom])
            ->andFilterWhere(['like', 'reason_not_take', $this->reason_not_take])
            ->andFilterWhere(['like', 'last_work_uzb', $this->last_work_uzb])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'passport_series', $this->passport_series]);

        return $dataProvider;
    }
}
