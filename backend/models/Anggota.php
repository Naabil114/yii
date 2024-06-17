<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property string $id_anggota
 * @property string $no_identitas
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $no_hp
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'no_identitas', 'nama', 'jenis_kelamin', 'alamat', 'no_hp'], 'required'],
            [['id_anggota', 'no_hp'], 'string', 'max' => 20],
            [['no_identitas'], 'string', 'max' => 50],
            [['nama'], 'string', 'max' => 60],
            [['jenis_kelamin'], 'string', 'max' => 10],
            [['alamat'], 'string', 'max' => 200],
            [['id_anggota'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_anggota' => 'Id Anggota',
            'no_identitas' => 'No Identitas',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
        ];
    }
}
