<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property int $id_nilai
 * @property int $NIM
 * @property int $id_tugas
 * @property int $nilai
 *
 * @property Murid $nIM
 * @property Tugas $tugas
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIM', 'id_tugas', 'nilai'], 'required'],
            [['NIM', 'id_tugas', 'nilai'], 'integer'],
            [['NIM'], 'exist', 'skipOnError' => true, 'targetClass' => Murid::className(), 'targetAttribute' => ['NIM' => 'nim']],
            [['id_tugas'], 'exist', 'skipOnError' => true, 'targetClass' => Tugas::className(), 'targetAttribute' => ['id_tugas' => 'id_tugas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_nilai' => 'Id Nilai',
            'NIM' => 'Nim',
            'id_tugas' => 'Id Tugas',
            'nilai' => 'Nilai',
        ];
    }

    /**
     * Gets query for [[NIM]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNIM()
    {
        return $this->hasOne(Murid::className(), ['nim' => 'NIM']);
    }

    /**
     * Gets query for [[Tugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTugas()
    {
        return $this->hasOne(Tugas::className(), ['id_tugas' => 'id_tugas']);
    }
}
