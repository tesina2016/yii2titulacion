<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "teachercareer".
 *
 * @property string $idprofesor
 * @property integer $idcarrera
 * @property string $created_at
 * @property string $updated_at
 * @property integer $idstat
 *
 * @property Career $idcarrera0
 * @property Stat $idstat0
 * @property Teacher $idprofesor0
 */
class Teachercareer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teachercareer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprofesor', 'idcarrera', 'created_at', 'updated_at', 'idstat'], 'required'],
            [['idcarrera', 'idstat'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['idprofesor'], 'string', 'max' => 13],
            [['idcarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Career::className(), 'targetAttribute' => ['idcarrera' => 'id']],
            [['idstat'], 'exist', 'skipOnError' => true, 'targetClass' => Stat::className(), 'targetAttribute' => ['idstat' => 'idstat']],
            [['idprofesor'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['idprofesor' => 'idprofesor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprofesor' => 'Idprofesor',
            'idcarrera' => 'Idcarrera',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'idstat' => 'Idstat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcarrera0()
    {
        return $this->hasOne(Career::className(), ['id' => 'idcarrera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdstat0()
    {
        return $this->hasOne(Stat::className(), ['idstat' => 'idstat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdprofesor0()
    {
        return $this->hasOne(Teacher::className(), ['idprofesor' => 'idprofesor']);
    }
}
