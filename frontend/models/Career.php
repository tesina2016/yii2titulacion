<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "career".
 *
 * @property integer $id
 * @property string $nombredecarrera
 * @property string $nombredecarreracorto
 * @property integer $statusdecarrera
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Stat $statusdecarrera0
 */
class Career extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'career';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nombredecarrera', 'nombredecarreracorto'], 'required'],
            [['id', 'statusdecarrera'], 'integer'],
            [['created_at'], 'safe'],
            [['nombredecarrera', 'updated_at'], 'string', 'max' => 45],
            [['nombredecarreracorto'], 'string', 'max' => 7],
            [['statusdecarrera'], 'exist', 'skipOnError' => true, 'targetClass' => Stat::className(), 'targetAttribute' => ['statusdecarrera' => 'idstat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'CLAVE ID',
            'nombredecarrera' => 'NOMBRE DE CARRERA',
            'nombredecarreracorto' => 'ALIAS',
            'statusdecarrera' => 'STATUS',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusdecarrera0()
    {
        return $this->hasOne(Stat::className(), ['idstat' => 'statusdecarrera']);
    }
}
