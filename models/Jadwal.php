<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id_jadwal
 * @property int $nk
 * @property int $nip
 * @property string $hari
 *
 * @property Kelas $nk0
 * @property Guru $nip0
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nk', 'nip', 'hari'], 'required'],
            [['nk', 'nip'], 'integer'],
            [['hari'], 'string', 'max' => 225],
            [['nk'], 'unique'],
            [['nk'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['nk' => 'nk']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Guru::className(), 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'nk' => 'Nk',
            'nip' => 'Nip',
            'hari' => 'Hari',
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
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Guru::className(), ['nip' => 'nip']);
    }
}
