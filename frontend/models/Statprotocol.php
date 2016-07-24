<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "statprotocol".
 *
 * @property integer $idstat
 * @property string $nombrestat
 * @property string $nombrestatcorto
 * @property string $created_at
 * @property string $updated_at
 * @property integer $idstatus
 *
 * @property Protocol[] $protocols
 * @property Stat $idstatus0
 */
class Statprotocol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statprotocol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idstat', 'nombrestat', 'nombrestatcorto', 'created_at', 'updated_at', 'idstatus'], 'required'],
            [['idstat', 'idstatus'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nombrestat'], 'string', 'max' => 20],
            [['nombrestatcorto'], 'string', 'max' => 7],
            [['idstatus'], 'exist', 'skipOnError' => true, 'targetClass' => Stat::className(), 'targetAttribute' => ['idstatus' => 'idstat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idstat' => 'Idstat',
            'nombrestat' => 'Nombrestat',
            'nombrestatcorto' => 'Nombrestatcorto',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'idstatus' => 'Idstatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProtocols()
    {
        return $this->hasMany(Protocol::className(), ['statustrabajo' => 'idstat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdstatus0()
    {
        return $this->hasOne(Stat::className(), ['idstat' => 'idstatus']);
    }
}
