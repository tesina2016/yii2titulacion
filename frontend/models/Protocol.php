<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "protocol".
 *
 * @property integer $idprotocolo
 * @property string $idestudiante
 * @property integer $idplan
 * @property integer $idopcion
 * @property string $nombredelprotocolo
 * @property string $created_at
 * @property string $updated_at
 * @property integer $statustrabajo
 *
 * @property Judgeprotocol[] $judgeprotocols
 * @property Student $idestudiante0
 * @property Plan $idplan0
 * @property Statprotocol $statustrabajo0
 */
class Protocol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $arrayidestudiante;
    public $arrayidplan;
    public $arrayidopcion;

    public static function tableName()
    {
        return 'protocol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprotocolo', 'idestudiante', 'idplan', 'idopcion', 'nombredelprotocolo', 'created_at', 'updated_at', 'statustrabajo'], 'required'],
            [['idprotocolo', 'idplan', 'idopcion', 'statustrabajo'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['idestudiante'], 'string', 'max' => 10],
            [['nombredelprotocolo'], 'string', 'max' => 128],
            [['idestudiante'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['idestudiante' => 'idestudiante']],
            [['idplan'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['idplan' => 'idplan']],
            [['statustrabajo'], 'exist', 'skipOnError' => true, 'targetClass' => Statprotocol::className(), 'targetAttribute' => ['statustrabajo' => 'idstat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprotocolo' => 'Idprotocolo',
            'idestudiante' => 'Idestudiante',
            'idplan' => 'Idplan',
            'idopcion' => 'Idopcion',
            'nombredelprotocolo' => 'Nombredelprotocolo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'statustrabajo' => 'Statustrabajo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJudgeprotocols()
    {
        return $this->hasMany(Judgeprotocol::className(), ['idprotocolo' => 'idprotocolo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdestudiante0()
    {
        return $this->hasOne(Student::className(), ['idestudiante' => 'idestudiante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdplan0()
    {
        return $this->hasOne(Plan::className(), ['idplan' => 'idplan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatustrabajo0()
    {
        return $this->hasOne(Statprotocol::className(), ['idstat' => 'statustrabajo']);
    }
}
