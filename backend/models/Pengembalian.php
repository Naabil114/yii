<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengembalian".
 *
 * @property string $kd_pengembalian
 * @property string $tanggal_kembali
 * @property int $denda
 * @property string $kd_pinjam
 * @property string $kd_buku
 * @property string $id_anggota
 * @property string $id_petugas
 */
class Pengembalian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengembalian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pengembalian', 'tanggal_kembali', 'denda', 'kd_pinjam', 'kd_buku', 'id_anggota', 'id_petugas'], 'required'],
            [['tanggal_kembali'], 'safe'],
            [['denda'], 'integer'],
            [['kd_pengembalian', 'kd_pinjam', 'kd_buku', 'id_anggota', 'id_petugas'], 'string', 'max' => 20],
            [['kd_pengembalian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pengembalian' => 'Kd Pengembalian',
            'tanggal_kembali' => 'Tanggal Kembali',
            'denda' => 'Denda',
            'kd_pinjam' => 'Kd Pinjam',
            'kd_buku' => 'Kd Buku',
            'id_anggota' => 'Id Anggota',
            'id_petugas' => 'Id Petugas',
        ];
    }
}
