<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengembalian;

/**
 * PengembalianSearch represents the model behind the search form of `app\models\Pengembalian`.
 */
class PengembalianSearch extends Pengembalian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pengembalian', 'tanggal_kembali', 'kd_pinjam', 'kd_buku', 'id_anggota', 'id_petugas'], 'safe'],
            [['denda'], 'integer'],
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
        $query = Pengembalian::find();

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
            'tanggal_kembali' => $this->tanggal_kembali,
            'denda' => $this->denda,
        ]);

        $query->andFilterWhere(['like', 'kd_pengembalian', $this->kd_pengembalian])
            ->andFilterWhere(['like', 'kd_pinjam', $this->kd_pinjam])
            ->andFilterWhere(['like', 'kd_buku', $this->kd_buku])
            ->andFilterWhere(['like', 'id_anggota', $this->id_anggota])
            ->andFilterWhere(['like', 'id_petugas', $this->id_petugas]);

        return $dataProvider;
    }
}
