<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pmj;

/**
 * PmjSearch represents the model behind the search form about `backend\models\Pmj`.
 */

class PmjSearch extends Pmj
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nationality_id', 'tel', 'citizenship_id', 'second_cityzenship_id', 'numb_pasp', 'status_id', 'division_id'], 'integer'],
            [['surname', 'name', 'mname', 'pre_surname', 'pre_name', 'pre_mname', 'photo', 'photo1', 'photo2', 'photo3', 'birth_date', 'birth_place', 'living_place', 'seria_pasp', 'pasp_date', 'pasp_place', 'reason', 'security', 'law_court', 'criminal', 'army', 'guide'], 'safe'],
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
        $this->load($params);
        $process = $params['status'];
        if ($process == 1) {
            $query = Pmj::find()->where(['!=','status_id','6'])->andwhere(['!=','status_id','0'])->andwhere(['!=','status_id','4']);
        }else{
            $query = Pmj::find();
        }




        // add conditions that should always apply here
        
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);
        


        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nationality_id' => $this->nationality_id,
            'birth_date' => $this->birth_date,
            'tel' => $this->tel,
            'citizenship_id' => $this->citizenship_id,
            'second_cityzenship_id' => $this->second_cityzenship_id,
            'numb_pasp' => $this->numb_pasp,
            'pasp_date' => $this->pasp_date,
            'status_id' => $this->status_id,
            'division_id' => $this->division_id,
        ]);

        $query->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'guide', $this->guide])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'pre_surname', $this->pre_surname])
            ->andFilterWhere(['like', 'pre_name', $this->pre_name])
            ->andFilterWhere(['like', 'pre_mname', $this->pre_mname])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'photo1', $this->photo1])
            ->andFilterWhere(['like', 'photo2', $this->photo2])
            ->andFilterWhere(['like', 'photo3', $this->photo3])
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
