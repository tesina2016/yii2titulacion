<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property string $idprofesor
 * @property string $nombreprofesor
 * @property string $apellidosprofesor
 * @property string $telefonolocal
 * @property string $telefonomovil
 * @property string $email
 * @property integer $idestado
 * @property string $created_at
 * @property string $updated_at
 * @property string $cedulaprofesional
 * @property string $ultimogrado
 * @property string $titulocorto
 *
 * @property Judgeprotocol[] $judgeprotocols
 * @property Stat $idestado0
 * @property Teachercareer $teachercareer
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprofesor', 'nombreprofesor', 'apellidosprofesor', 'telefonomovil', 'email', 'created_at', 'updated_at', 'cedulaprofesional', 'ultimogrado', 'titulocorto'], 'required'],
            [['idestado'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['idprofesor'], 'string', 'max' => 13],
            [['nombreprofesor'], 'string', 'max' => 30],
            [['apellidosprofesor', 'ultimogrado'], 'string', 'max' => 45],
            [['telefonolocal', 'telefonomovil', 'cedulaprofesional', 'titulocorto'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 70],
            [['idestado'], 'exist', 'skipOnError' => true, 'targetClass' => Stat::className(), 'targetAttribute' => ['idestado' => 'idstat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprofesor' => 'Idprofesor',
            'nombreprofesor' => 'Nombreprofesor',
            'apellidosprofesor' => 'Apellidosprofesor',
            'telefonolocal' => 'Telefonolocal',
            'telefonomovil' => 'Telefonomovil',
            'email' => 'Email',
            'idestado' => 'Idestado',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'cedulaprofesional' => 'Cedulaprofesional',
            'ultimogrado' => 'Ultimogrado',
            'titulocorto' => 'Titulocorto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJudgeprotocols()
    {
        return $this->hasMany(Judgeprotocol::className(), ['idprofesor' => 'idprofesor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdestado0()
    {
        return $this->hasOne(Stat::className(), ['idstat' => 'idestado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachercareer()
    {
        return $this->hasOne(Teachercareer::className(), ['idprofesor' => 'idprofesor']);
    }
}
