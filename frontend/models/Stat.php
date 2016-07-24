<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stat".
 *
 * @property integer $idstat
 * @property string $nombrestat
 * @property string $nombrestatcorto
 * @property string $created_at
 * @property string $updated_at
 */
class Stat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idstat', 'nombrestat', 'nombrestatcorto', 'created_at', 'updated_at'], 'required'],
            [['idstat'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nombrestat'], 'string', 'max' => 15],
            [['nombrestatcorto'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idstat' => 'CLAVE ID',
            'nombrestat' => 'NOMBRE DE ESTADO DE REGISTRO',
            'nombrestatcorto' => 'NOMBRE CORTO',
            'created_at' => 'CREADO EL',
            'updated_at' => 'ACTUALIZADO EL',
        ];
    }
}
