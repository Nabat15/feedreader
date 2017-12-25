<?php

namespace kouosl\feedreader\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\feedreader\models\Sayfa;

/**
 * SayfaSearch represents the model behind the search form about `kouosl\feedreader\models\Sayfa`.
 */
class SayfaSearch extends Sayfa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['baslik', 'url'], 'safe'],
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
        $query = Sayfa::find();

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
        ]);

        $query->andFilterWhere(['like', 'baslik', $this->baslik])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
