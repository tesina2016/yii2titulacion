<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "option".
 *
 * @property integer $idplan
 * @property integer $idopcion
 * @property string $nombreopcion
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Plan $idplan0
 */
class Option extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idplan', 'idopcion', 'nombreopcion', 'status'], 'required'],
            [['idplan', 'idopcion', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nombreopcion'], 'string', 'max' => 45],
            [['idplan'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['idplan' => 'idplan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idplan' => 'Idplan',
            'idopcion' => 'Idopcion',
            'nombreopcion' => 'Nombreopcion',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdplan0()
    {
        return $this->hasOne(Plan::className(), ['idplan' => 'idplan']);
    }

    public function getNombrecompleto(){
        return $this->idplan.' '.$this->idopcion;
    }

}
