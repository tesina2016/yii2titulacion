<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Stat;

/* @var $this yii\web\View */
/* @var $model frontend\models\Career */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="career-form">

    <?php $form = ActiveForm::begin(); 

        /* Detectamos si es un Insert o un Update */

        if($model->isNewRecord) {    
            echo $form->field($model, 'id')->textInput();    
        } else {
            echo $form->field($model, 'id')->textInput(['readonly' => 'true']);            
        }
    ?>

    <?= $form->field($model, 'nombredecarrera')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nombredecarreracorto')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'statusdecarrera')->dropdownList(
        ArrayHelper::map(Stat::find()->all(),'idstat','nombrestat'),
        ['prompt' => 'Elige un Estado']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'GRABAR CAPTURA' : 'ACTUALIZAR CAPTURA', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
