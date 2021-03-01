<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tugas".
 *
 * @property int $id_tugas
 * @property int $id_materi
 * @property int $nim
 * @property string $tgl_dikirim
 * @property string $nama_tugas
 * @property string $tugas
 *
 * @property Nilai[] $nilais
 * @property Murid $nim0
 */
class Tugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName() 
    {
        return 'tugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_materi', 'nim', 'tgl_dikirim', 'nama_tugas', 'tugas'], 'required'],
            [['id_materi', 'nim'], 'integer'],
            [['tgl_dikirim'], 'safe'],
             [['file'],'file'],
            [['nama_tugas', 'tugas'], 'string', 'max' => 225],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Murid::className(), 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tugas' => 'Id Tugas',
            'id_materi' => 'Id Materi',
            'nim' => 'Nim',
            'tgl_dikirim' => 'Tgl Dikirim',
            'nama_tugas' => 'Nama Tugas',
            'file' => 'File Tugas',
        ];
    }

    /**
     * Gets query for [[Nilais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['id_tugas' => 'id_tugas']);
    }

    /**
     * Gets query for [[Nim0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(Murid::className(), ['nim' => 'nim']);
    }
}
