<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Docs;

/**
 * DocsSearch represents the model behind the search form about `backend\models\Docs`.
 */
class DocsSearch extends Docs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nation_id', 'type_id', 'status_id', 'division_id'], 'integer'],
            [['surname', 'name', 'mname', 'pre_surname', 'pre_name', 'pre_mname', 'birth_date', 'birth_place', 'citizenship_id', 'type_place', 'type_date', 'fio_father', 'fio_mother', 'study_name', 'study_place', 'study_start_date', 'study_end_date', 'pension_reason', 'pension_date', 'pension_org', 'last_cost', 'last_cost_org', 'doc_target', 'living_place', 'tel', 'fax', 'sec_name', 'sec_surname', 'sec_mname', 'sec_birthplace', 'sec_birthdate', 'sec_citizenship_id', 'relative', 'sec_livingplace', 'sec_tel', 'sec_fax', 'scan_file', 'pre_citizenship_id', 'email', 'comment'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Docs::find();

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
            'type_id' => $this->type_id,
            'type_date' => $this->type_date,
            'study_start_date' => $this->study_start_date,
            'study_end_date' => $this->study_end_date,
            'pension_date' => $this->pension_date,
            'sec_birthdate' => $this->sec_birthdate,
            'status_id' => $this->status_id,
            'division_id' => $this->division_id,
        ]);

        $query->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'pre_surname', $this->pre_surname])
            ->andFilterWhere(['like', 'pre_name', $this->pre_name])
            ->andFilterWhere(['like', 'pre_mname', $this->pre_mname])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'citizenship_id', $this->citizenship_id])
            ->andFilterWhere(['like', 'type_place', $this->type_place])
            ->andFilterWhere(['like', 'fio_father', $this->fio_father])
            ->andFilterWhere(['like', 'fio_mother', $this->fio_mother])
            ->andFilterWhere(['like', 'study_name', $this->study_name])
            ->andFilterWhere(['like', 'study_place', $this->study_place])
            ->andFilterWhere(['like', 'pension_reason', $this->pension_reason])
            ->andFilterWhere(['like', 'pension_org', $this->pension_org])
            ->andFilterWhere(['like', 'last_cost', $this->last_cost])
            ->andFilterWhere(['like', 'last_cost_org', $this->last_cost_org])
            ->andFilterWhere(['like', 'doc_target', $this->doc_target])
            ->andFilterWhere(['like', 'living_place', $this->living_place])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'sec_name', $this->sec_name])
            ->andFilterWhere(['like', 'sec_surname', $this->sec_surname])
            ->andFilterWhere(['like', 'sec_mname', $this->sec_mname])
            ->andFilterWhere(['like', 'sec_birthplace', $this->sec_birthplace])
            ->andFilterWhere(['like', 'sec_citizenship_id', $this->sec_citizenship_id])
            ->andFilterWhere(['like', 'relative', $this->relative])
            ->andFilterWhere(['like', 'sec_livingplace', $this->sec_livingplace])
            ->andFilterWhere(['like', 'sec_tel', $this->sec_tel])
            ->andFilterWhere(['like', 'sec_fax', $this->sec_fax])
            ->andFilterWhere(['like', 'scan_file', $this->scan_file])
            ->andFilterWhere(['like', 'pre_citizenship_id', $this->pre_citizenship_id])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
