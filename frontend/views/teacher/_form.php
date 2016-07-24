<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-4 col-xd-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Datos Generales</div>            
                <div class="panel-body">
                <?php
                        if($model->isNewRecord) {    
                            echo $form->field($model, 'idprofesor')->textInput(['maxlength' => true]);
                        } else {
                            echo $form->field($model, 'idprofesor')->textInput(['maxlength' => true, 'readonly' => 'true']);
                        }
                    ?>

                    <?= $form->field($model, 'nombreprofesor')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'apellidosprofesor')->textInput(['maxlength' => true]) ?>
                </div>            
            </div>
        </div>
        <div class="col-sm-4 col-xd-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Datos Generales</div>   
                <div class="panel-body">
                    <?= $form->field($model, 'telefonolocal')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'telefonomovil')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                </div>            
            </div>
        </div>
        <div class="col-sm-4 col-xd-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Datos Generales</div>
                <div class="panel-body">
                    <?= $form->field($model, 'cedulaprofesional')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'ultimogrado')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'titulocorto')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'idestado')->textInput() ?>
                </div>            
            </div>
        </div>
    </div>


        /* Detectamos si es un Insert o un Update */







    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
