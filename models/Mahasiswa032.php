<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_032".
 *
 * @property int $Id
 * @property string $NIM
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 *
 * @property Profil032 $profil032
 */
class Mahasiswa032 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_032';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIM', 'Nama', 'Kelas', 'Jurusan'], 'required'],
            [['NIM', 'Nama', 'Kelas', 'Jurusan'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'NIM' => 'No. Induk Mahasiswa',
            'Nama' => 'Nama Mahasiswa',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Profil032]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfil032()
    {
        return $this->hasOne(Profil032::className(), ['Id_mahasiswa' => 'Id']);
    }
}
