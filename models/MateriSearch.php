<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Materi;

/**
 * MateriSearch represents the model behind the search form of `app\models\Materi`.
 */
class MateriSearch extends Materi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_materi', 'nk', 'nip'], 'integer'],
            [['tgl_dibuat', 'file_materi', 'tugas'], 'safe'],
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
        $query = Materi::find();

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
            'id_materi' => $this->id_materi,
            'nk' => $this->nk,
            'nip' => $this->nip,
            'tgl_dibuat' => $this->tgl_dibuat,
        ]);

        $query->andFilterWhere(['like', 'file_materi', $this->file_materi])
            ->andFilterWhere(['like', 'tugas', $this->tugas]);

        return $dataProvider;
    }
}
