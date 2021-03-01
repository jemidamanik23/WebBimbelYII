<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "murid".
 *
 * @property int $id_murid
 * @property int $nim
 * @property string $nama
 * @property int $nk
 * @property string $tgl_masuk
 * @property string $tgl_keluar
 *
 * @property Kelas $nk0
 * @property Kelas $nk1
 * @property Kelas $nk2
 * @property Nilai[] $nilais
 * @property Tugas[] $tugas
 */
class Murid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'murid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'nk', 'tgl_masuk', 'tgl_keluar'], 'required'],
            [['nim', 'nk'], 'integer'],
            [['tgl_masuk', 'tgl_keluar'], 'safe'],
            [['nama'], 'string', 'max' => 225],
            [['nim'], 'unique'],
            [['nk'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['nk' => 'nk']],
            [['nk'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['nk' => 'nk']],
            [['nk'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['nk' => 'nk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_murid' => 'Id Murid',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'nk' => 'Nk',
            'tgl_masuk' => 'Tgl Masuk',
            'tgl_keluar' => 'Tgl Keluar',
        ];
    }

    /**
     * Gets query for [[Nk0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNk0()
    {
        return $this->hasOne(Kelas::className(), ['nk' => 'nk']);
    }

    /**
     * Gets query for [[Nk1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNk1()
    {
        return $this->hasOne(Kelas::className(), ['nk' => 'nk']);
    }

    /**
     * Gets query for [[Nk2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNk2()
    {
        return $this->hasOne(Kelas::className(), ['nk' => 'nk']);
    }

    /**
     * Gets query for [[Nilais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['NIM' => 'nim']);
    }

    /**
     * Gets query for [[Tugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTugas()
    {
        return $this->hasMany(Tugas::className(), ['nim' => 'nim']);
    }
}
