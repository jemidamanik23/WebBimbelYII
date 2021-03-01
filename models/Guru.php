<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property int $id_guru
 * @property int $nip
 * @property string $nama_guru
 *
 * @property Jadwal[] $jadwals
 * @property Materi[] $materis
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama_guru'], 'required'],
            [['nip'], 'integer'],
            [['nama_guru'], 'string', 'max' => 255],
            [['nip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_guru' => 'Id Guru',
            'nip' => 'Nip',
            'nama_guru' => 'Nama Guru',
        ];
    }

    /**
     * Gets query for [[Jadwals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['nip' => 'nip']);
    }

    /**
     * Gets query for [[Materis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateris()
    {
        return $this->hasMany(Materi::className(), ['nip' => 'nip']);
    }
}
