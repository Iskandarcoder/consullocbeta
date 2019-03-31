<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Relative;

/**
 * RelativeSearch represents the model behind the search form about `backend\models\Relative`.
 */
class RelativeSearch extends Relative
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pmj_id', 'adres'], 'integer'],
            [['fio', 'relative', 'birth', 'work'], 'safe'],
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
        $query = Relative::find();

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
            'pmj_id' => $this->pmj_id,
            'adres' => $this->adres,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'relative', $this->relative])
            ->andFilterWhere(['like', 'birth', $this->birth])
            ->andFilterWhere(['like', 'work', $this->work]);

        return $dataProvider;
    }
}
