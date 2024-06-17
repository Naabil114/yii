<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Buku;

/**
 * BukuSearch represents the model behind the search form of `app\models\Buku`.
 */
class BukuSearch extends Buku
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_buku', 'judul', 'sampul', 'kategori', 'pengarang', 'penerbit', 'tahun_terbit', 'status'], 'safe'],
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
        $query = Buku::find();

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
        $query->andFilterWhere(['like', 'kd_buku', $this->kd_buku])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'sampul', $this->sampul])
            ->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'pengarang', $this->pengarang])
            ->andFilterWhere(['like', 'penerbit', $this->penerbit])
            ->andFilterWhere(['like', 'tahun_terbit', $this->tahun_terbit])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
