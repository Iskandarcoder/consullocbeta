<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NgrajRelativesUzb;

/**
 * NgrajRelativesUzbSearch represents the model behind the search form of `backend\models\NgrajRelativesUzb`.
 */
class NgrajRelativesUzbSearch extends NgrajRelativesUzb
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'citizenship_id'], 'integer'],
            [['fio', 'relation', 'birth_date', 'birth_place', 'occupation', 'address'], 'safe'],
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
        $query = NgrajRelativesUzb::find();

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
            'citizenship_id' => $this->citizenship_id,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
