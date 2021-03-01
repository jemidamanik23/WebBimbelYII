<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materi".
 *
 * @property int $id_materi
 * @property int $nk
 * @property int $nip
 * @property string $tgl_dibuat
 * @property string $nama_materi
 * @property string $file_materi
 * @property string $tugas
 *
 * @property Kelas $nk0
 * @property Guru $nip0
 */
class Materi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nk', 'nip', 'tgl_dibuat', 'nama_materi', 'file_materi', 'tugas'], 'required'],
            [['nk', 'nip'], 'integer'],
            [['tgl_dibuat'], 'safe'],
            [['nama_materi', 'file_materi', 'tugas'], 'string', 'max' => 225],
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
            'id_materi' => 'Id Materi',
            'nk' => 'Nk',
            'nip' => 'Nip',
            'tgl_dibuat' => 'Tgl Dibuat',
            'nama_materi' => 'Nama Materi',
            'file_materi' => 'File Materi',
            'tugas' => 'Tugas',
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
