<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pmj;

/**
 * PmjSearch represents the model behind the search form of `backend\models\Pmj`.
 */
class PmjSearch extends Pmj
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'mname', 'pre_surname', 'pre_name', 'pre_mname', 'birth_date', 'birth_place', 'living_place', 'seria_pasp', 'pasp_date', 'pasp_place', 'reason', 'security', 'law_court', 'criminal', 'army'], 'safe'],
            [['nationality_id', 'tel', 'citizenship_id', 'second_cityzenship_id', 'numb_pasp', 'id', 'status_id'], 'integer'],
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
        $query = Pmj::find();

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
            'nationality_id' => $this->nationality_id,
            'birth_date' => $this->birth_date,
            'tel' => $this->tel,
            'citizenship_id' => $this->citizenship_id,
            'second_cityzenship_id' => $this->second_cityzenship_id,
            'numb_pasp' => $this->numb_pasp,
            'pasp_date' => $this->pasp_date,
            'id' => $this->id,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'pre_surname', $this->pre_surname])
            ->andFilterWhere(['like', 'pre_name', $this->pre_name])
            ->andFilterWhere(['like', 'pre_mname', $this->pre_mname])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'living_place', $this->living_place])
            ->andFilterWhere(['like', 'seria_pasp', $this->seria_pasp])
            ->andFilterWhere(['like', 'pasp_place', $this->pasp_place])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'security', $this->security])
            ->andFilterWhere(['like', 'law_court', $this->law_court])
            ->andFilterWhere(['like', 'criminal', $this->criminal])
            ->andFilterWhere(['like', 'army', $this->army]);

        return $dataProvider;
    }
}
