<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property string $kd_buku
 * @property string $judul
 * @property string $sampul
 * @property string $kategori
 * @property string $pengarang
 * @property string $penerbit
 * @property string $tahun_terbit
 * @property string $status
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_buku', 'judul', 'sampul', 'kategori', 'pengarang', 'penerbit', 'tahun_terbit', 'status'], 'required'],
            [['sampul'], 'string'],
            [['kd_buku'], 'string', 'max' => 20],
            [['judul', 'kategori', 'pengarang', 'penerbit'], 'string', 'max' => 200],
            [['tahun_terbit'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
            [['kd_buku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_buku' => 'Kd Buku',
            'judul' => 'Judul',
            'sampul' => 'Sampul',
            'kategori' => 'Kategori',
            'pengarang' => 'Pengarang',
            'penerbit' => 'Penerbit',
            'tahun_terbit' => 'Tahun Terbit',
            'status' => 'Status',
        ];
    }
}
