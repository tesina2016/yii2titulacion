<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Stat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stat-form">

    <?php $form = ActiveForm::begin();

        if($model->isNewRecord){ 
            echo $form->field($model, 'idstat')->textInput(['placeholder' => 'Llave unica de Identificacion']);
            }
        else { 

            echo $form->field($model, 'idstat')->textInput(['placeholder' => 'Llave unica de Identificacion', 'readonly' => 'true']);
            } 
    ?> 

    <?= $form->field($model, 'nombrestat')->textInput(['maxlength' => true,'placeholder' => 'Escriba la descripcion']) ?>

    <?= $form->field($model, 'nombrestatcorto')->textInput(['maxlength' => true, 'placeholder' => 'Escriba la descripcion corta']) ?>

    <!--
    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>
    -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Grabar Captura' : 'Actualizar Captura', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
