<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property string $id_petugas
 * @property string $nama
 * @property string $jabatan
 * @property string $no_hp
 * @property string $alamat
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_petugas', 'nama', 'jabatan', 'no_hp', 'alamat'], 'required'],
            [['id_petugas', 'no_hp'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 50],
            [['jabatan'], 'string', 'max' => 80],
            [['alamat'], 'string', 'max' => 200],
            [['id_petugas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_petugas' => 'Id Petugas',
            'nama' => 'Nama',
            'jabatan' => 'Jabatan',
            'no_hp' => 'No Hp',
            'alamat' => 'Alamat',
        ];
    }
}
