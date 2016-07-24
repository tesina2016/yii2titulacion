<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property integer $idplan
 * @property integer $idestado
 *
 * @property Option[] $options
 * @property Stat $idestado0
 * @property Student[] $students
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idplan', 'idestado'], 'required'],
            [['idplan', 'idestado'], 'integer'],
            [['idestado'], 'exist', 'skipOnError' => true, 'targetClass' => Stat::className(), 'targetAttribute' => ['idestado' => 'idstat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idplan' => 'Idplan',
            'idestado' => 'Idestado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptions()
    {
        return $this->hasMany(Option::className(), ['idplan' => 'idplan']);
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
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['idplan' => 'idplan']);
    }
}
