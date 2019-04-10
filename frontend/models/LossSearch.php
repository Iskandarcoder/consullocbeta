<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Loss;

/**
 * LossSearch represents the model behind the search form of `backend\models\Loss`.
 */
class LossSearch extends Loss
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cause_id', 'counrtry_id', 'citizenship_id', 'nationality_id', 'education_id', 'marital_id', 'pmj_id', 'status_id'], 'integer'],
            [['guide', 'surname', 'name', 'mname', 'pre_mname', 'living_place', 'tel', 'date', 'city', 'birt_date', 'birth_place', 'court', 'wedding_date', 'marital_surname', 'marital_name', 'marital_mname', 'marital_bdate', 'last_place', 'passport', 'photo', 'comment'], 'safe'],
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
        $query = Loss::find();

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
            'cause_id' => $this->cause_id,
            'counrtry_id' => $this->counrtry_id,
            'date' => $this->date,
            'birt_date' => $this->birt_date,
            'citizenship_id' => $this->citizenship_id,
            'nationality_id' => $this->nationality_id,
            'education_id' => $this->education_id,
            'marital_id' => $this->marital_id,
            'wedding_date' => $this->wedding_date,
            'marital_bdate' => $this->marital_bdate,
            'pmj_id' => $this->pmj_id,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'guide', $this->guide])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'pre_mname', $this->pre_mname])
            ->andFilterWhere(['like', 'living_place', $this->living_place])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'court', $this->court])
            ->andFilterWhere(['like', 'marital_surname', $this->marital_surname])
            ->andFilterWhere(['like', 'marital_name', $this->marital_name])
            ->andFilterWhere(['like', 'marital_mname', $this->marital_mname])
            ->andFilterWhere(['like', 'last_place', $this->last_place])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
