<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property string $kd_pinjam
 * @property string $tanggal_pinjam
 * @property string $kd_buku
 * @property string $id_anggota
 * @property string $id_petugas
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pinjam', 'tanggal_pinjam', 'kd_buku', 'id_anggota', 'id_petugas'], 'required'],
            [['tanggal_pinjam'], 'safe'],
            [['kd_pinjam', 'kd_buku', 'id_anggota', 'id_petugas'], 'string', 'max' => 20],
            [['kd_pinjam'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pinjam' => 'Kd Pinjam',
            'tanggal_pinjam' => 'Tanggal Pinjam',
            'kd_buku' => 'Kd Buku',
            'id_anggota' => 'Id Anggota',
            'id_petugas' => 'Id Petugas',
        ];
    }
}
