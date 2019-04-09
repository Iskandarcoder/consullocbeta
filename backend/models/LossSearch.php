<?php

namespace backend\models;

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
            [['id', 'cause_id', 'country_id', 'citizenship_id',  'education_id', 'marital_id', 'status_id', 'division_id'], 'integer'],
            [['guide', 'surname', 'name', 'mname', 'pre_mname', 'living_place', 'tel', 'mail', 'date', 'city', 'birt_date', 'birth_place', 'court', 'nationality_id', 'pmj_id', 'wedding_date', 'marital_fio', 'marital_bdate', 'last_place', 'enter_date', 'passport', 'photo', 'comment'], 'safe'],
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

        $query->joinWith('spNation');
        $query->joinWith('spCountry2');

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cause_id' => $this->cause_id,
            'country_id' => $this->country_id,
            'date' => $this->date,
            'birt_date' => $this->birt_date,
            'citizenship_id' => $this->citizenship_id,            
            'education_id' => $this->education_id,
            'marital_id' => $this->marital_id,
            'wedding_date' => $this->wedding_date,
            'marital_bdate' => $this->marital_bdate,            
            'enter_date' => $this->enter_date,
            'status_id' => $this->status_id,
            'division_id' => $this->division_id,
        ]);

        $query->andFilterWhere(['like', 'guide', $this->guide])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'sp_nationyii.sp_name_ru', $this->nationality_id])
            ->andFilterWhere(['like', 'sp_countryyii.sp_name_ru', $this->pmj_id])                        
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'pre_mname', $this->pre_mname])
            ->andFilterWhere(['like', 'living_place', $this->living_place])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'court', $this->court])
            ->andFilterWhere(['like', 'marital_fio', $this->marital_fio])
            ->andFilterWhere(['like', 'last_place', $this->last_place])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
