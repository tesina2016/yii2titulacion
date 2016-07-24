<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $idestudiante
 * @property string $nombreestudiante
 * @property string $apellidosestudiante
 * @property string $telefonolocal
 * @property string $telefonomovil
 * @property string $email
 * @property integer $idcarrera
 * @property integer $idestado
 * @property string $created_at
 * @property string $updated_at
 * @property integer $idplan
 *
 * @property Career $idcarrera0
 * @property Stat $idestado0
 * @property Plan $idplan0
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idestudiante', 'nombreestudiante', 'apellidosestudiante', 'idplan'], 'required'],
            [['idcarrera', 'idestado', 'idplan'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['idestudiante', 'telefonolocal', 'telefonomovil'], 'string', 'max' => 10],
            [['nombreestudiante'], 'string', 'max' => 30],
            [['apellidosestudiante'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 70],
            [['idcarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Career::className(), 'targetAttribute' => ['idcarrera' => 'id']],
            [['idestado'], 'exist', 'skipOnError' => true, 'targetClass' => Stat::className(), 'targetAttribute' => ['idestado' => 'idstat']],
            [['idplan'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['idplan' => 'idplan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idestudiante' => 'ID',
            'nombreestudiante' => 'Nombre(s)',
            'apellidosestudiante' => 'Apellido',
            'telefonolocal' => 'Tel. Casa',
            'telefonomovil' => 'Tel. Movil',
            'email' => 'Email',
            'idcarrera' => 'Carrera',
            'idestado' => 'Estado',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'idplan' => 'Plan Estudio',
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
    public function getIdestado0()
    {
        return $this->hasOne(Stat::className(), ['idstat' => 'idestado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdplan0()
    {
        return $this->hasOne(Plan::className(), ['idplan' => 'idplan']);
    }

    public function getNombrecompleto(){
        return $this->apellidosestudiante.' '.$this->nombreestudiante;
    }

    public function getPlanestudio(){
        return $this->idplan;
    }
}
