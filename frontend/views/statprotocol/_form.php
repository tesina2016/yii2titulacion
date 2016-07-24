<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use frontend\models\Stat;

/* @var $this yii\web\View */
/* @var $model frontend\models\Statprotocol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statprotocol-form">

    <?php $form = ActiveForm::begin();

        if($model->isNewRecord){ 

            echo $form->field($model, 'idstat')->textInput(['placeholder' => 'Llave unica de Identificacion']);
            }
        else { 

            echo $form->field($model, 'idstat')->textInput(['placeholder' => 'Llave unica de Identificacion', 'readonly' => 'true']);
            } 
    ?> 



    <?= $form->field($model, 'nombrestat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombrestatcorto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idstatus')->dropdownList(
        ArrayHelper::map(Stat::find()->all(),'idstat','nombrestat'),
        ['prompt' => 'Elige un Estado']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
