<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Stat;
use frontend\models\Plan;
use frontend\models\Career;


/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">

                <div class="panel-heading text-center">Datos Generales</div>            
                <div class="panel-body">
                    <?php 
                        if($model->isNewRecord){ 
                    
                            echo $form->field($model, 'idestudiante')->textInput(['maxlength' => true]);
                            } else {                    
                            echo $form->field($model, 'idestudiante')->textInput(['maxlength' => true,'readonly' => 'true']);                    
                            }
                    ?>
                <?= $form->field($model, 'nombreestudiante')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'apellidosestudiante')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Datos Academicos</div>            
                <div class="panel-body">

                    <?= $form->field($model, 'idcarrera')->dropdownList(
                        ArrayHelper::map(Career::find()->all(),'id','nombredecarrera'),
                        ['prompt' => 'Elige una Carrera']
                    ) ?>

                    <?= $form->field($model, 'idplan')->dropdownList(
                        ArrayHelper::map(Plan::find()->all(),'idplan','idplan'),
                        ['prompt' => 'Elige un Plan de Estudio']
                    ) ?>

                    <?= $form->field($model, 'idestado')->dropdownList(
                        ArrayHelper::map(Stat::find()->all(),'idstat','nombrestat'),
                        ['prompt' => 'Elige un Estado']
                    ) ?>

                    
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">Datos de Contacto</div>            
                <div class="panel-body">
                    <?= $form->field($model, 'telefonolocal')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'telefonomovil')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'CREAR' : 'ACTUALIZAR', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
