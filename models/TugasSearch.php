<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tugas;

/**
 * TugasSearch represents the model behind the search form of `app\models\Tugas`.
 */
class TugasSearch extends Tugas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tugas', 'id_materi', 'nim'], 'integer'],
            [['tgl_dikirim', 'tugas'], 'safe'],
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
        $query = Tugas::find();

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
            'id_tugas' => $this->id_tugas,
            'id_materi' => $this->id_materi,
            'nim' => $this->nim,
            'tgl_dikirim' => $this->tgl_dikirim,
        ]);

        $query->andFilterWhere(['like', 'tugas', $this->tugas]);

        return $dataProvider;
    }
}
