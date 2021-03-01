<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $id_kelas
 * @property int $nk
 * @property string $nama_kelas
 *
 * @property Jadwal $jadwal
 * @property Materi[] $materis
 * @property Murid[] $murs
 * @property Murid[] $murs0
 * @property Murid[] $murs1
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nk', 'nama_kelas'], 'required'],
            [['nk'], 'integer'],
            [['nama_kelas'], 'string', 'max' => 225],
            [['nk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'Id Kelas',
            'nk' => 'Nk',
            'nama_kelas' => 'Nama Kelas',
        ];
    }

    /**
     * Gets query for [[Jadwal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwal()
    {
        return $this->hasOne(Jadwal::className(), ['nk' => 'nk']);
    }

    /**
     * Gets query for [[Materis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateris()
    {
        return $this->hasMany(Materi::className(), ['nk' => 'nk']);
    }

    /**
     * Gets query for [[Murs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMurs()
    {
        return $this->hasMany(Murid::className(), ['nk' => 'nk']);
    }

    /**
     * Gets query for [[Murs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMurs0()
    {
        return $this->hasMany(Murid::className(), ['nk' => 'nk']);
    }

    /**
     * Gets query for [[Murs1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMurs1()
    {
        return $this->hasMany(Murid::className(), ['nk' => 'nk']);
    }
}
