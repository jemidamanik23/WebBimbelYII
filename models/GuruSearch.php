<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guru;

/**
 * GuruSearch represents the model behind the search form of `app\models\Guru`.
 */
class GuruSearch extends Guru
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_guru', 'nip'], 'integer'],
            [['nama_guru'], 'safe'],
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
        $query = Guru::find();

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
            'id_guru' => $this->id_guru,
            'nip' => $this->nip,
        ]);

        $query->andFilterWhere(['like', 'nama_guru', $this->nama_guru]);

        return $dataProvider;
    }
}
