<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Stat;
use frontend\models\Career;
use frontend\models\Teacher;


/* @var $this yii\web\View */
/* @var $model frontend\models\Teachercareer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachercareer-form">
    <?php $form = ActiveForm::begin(); 

        /* Detectamos si es un Insert o un Update */

        if($model->isNewRecord) {    
            echo $form->field($model, 'idprofesor')->dropdownList(
                        ArrayHelper::map(Teacher::find()->all(),'idprofesor','nombreprofesor'),
                        ['prompt' => 'Elige un Profesor']
                    );
            echo $form->field($model, 'idcarrera')->dropdownList(
                        ArrayHelper::map(Career::find()->all(),'id','nombredecarrera'),
                        ['prompt' => 'Elige una Carrera']
                    );

        } else {
            echo $form->field($model, 'idprofesor')->textInput(['maxlength' => true,'readonly' => 'true']);
            echo $form->field($model, 'idcarrera')->textInput(['maxlength' => true,'readonly' => 'true']);
        }
    ?>

    <?= $form->field($model, 'idstat')->dropdownList(
        ArrayHelper::map(Stat::find()->all(),'idstat','nombrestat'),
        ['prompt' => 'Elige un Estado']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
