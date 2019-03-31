<?php

namespace backend\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Citizenship;

/**
 * CitizenshipSearch represents the model behind the search form of `backend\models\Citizenship`.
 */

class CitizenshipSearch extends Citizenship
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nationality_id', 'study_id', 'marital_id', 'marital_nation', 'citizenship_id', 'status_id', 'division_id'], 'integer'],
            [['guide', 'photo', 'surname', 'name', 'mname', 'pre_surname', 'pre_name', 'pre_mname', 'social_status', 'birth_date', 'profession', 'marital_name', 'marital_bdate', 'marital_place', 'court', 'army', 'army_now', 'medal', 'pmj', 'last_place', 'visit_uzb', 'business', 'cause', 'living_place', 'tel', 'file1', 'file2', 'file3', 'file4', 'comment'], 'safe'],
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
        $this->load($params);
        $process = $params['statuss'];
        if ($process == 1) {
            $query = Citizenship::find()->where(['!=','status_id','6'])->andwhere(['!=','status_id','0'])->andwhere(['!=','status_id','4']);
        }else{
            $query = Citizenship::find();
        }

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
            'birth_date' => $this->birth_date,
            'nationality_id' => $this->nationality_id,
            'study_id' => $this->study_id,
            'marital_id' => $this->marital_id,
            'marital_bdate' => $this->marital_bdate,
            'marital_nation' => $this->marital_nation,
            'citizenship_id' => $this->citizenship_id,
            'status_id' => $this->status_id,
            'division_id' => $this->division_id,
        ]);

        $query->andFilterWhere(['like', 'guide', $this->guide])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'pre_surname', $this->pre_surname])
            ->andFilterWhere(['like', 'pre_name', $this->pre_name])
            ->andFilterWhere(['like', 'pre_mname', $this->pre_mname])
            ->andFilterWhere(['like', 'social_status', $this->social_status])
            ->andFilterWhere(['like', 'profession', $this->profession])
            ->andFilterWhere(['like', 'marital_name', $this->marital_name])
            ->andFilterWhere(['like', 'marital_place', $this->marital_place])
            ->andFilterWhere(['like', 'court', $this->court])
            ->andFilterWhere(['like', 'army', $this->army])
            ->andFilterWhere(['like', 'army_now', $this->army_now])
            ->andFilterWhere(['like', 'medal', $this->medal])
            ->andFilterWhere(['like', 'pmj', $this->pmj])
            ->andFilterWhere(['like', 'last_place', $this->last_place])
            ->andFilterWhere(['like', 'visit_uzb', $this->visit_uzb])
            ->andFilterWhere(['like', 'business', $this->business])
            ->andFilterWhere(['like', 'cause', $this->cause])
            ->andFilterWhere(['like', 'living_place', $this->living_place])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'file1', $this->file1])
            ->andFilterWhere(['like', 'file2', $this->file2])
            ->andFilterWhere(['like', 'file3', $this->file3])
            ->andFilterWhere(['like', 'file4', $this->file4])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
