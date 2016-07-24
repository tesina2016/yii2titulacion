<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use frontend\models\Plan;
use frontend\models\Option;
use frontend\models\Student;


/* @var $this yii\web\View */
/* @var $model frontend\models\Protocol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="protocol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idprotocolo')->textInput() ?>

    <?php echo $form->field($model, 'idestudiante')->dropDownList(
        ArrayHelper::map(Student::find()->all(),'idestudiante','Nombrecompleto'),
        [
            'prompt'=>'Seleccione el Alumno',
            'onchange' => '
             $.get( "index.php?r=student/lists&id='.'"+$(this).val(), function(data){
                $("select#protocol-idplan").html(data);
             });'

        ]
    ); 
    ?>

    
    <?= $form->field($model, 'idplan')->dropdownList(
        ArrayHelper::map(Plan::find()->all(),'idplan','idplan'),
        [
         'prompt' => 'Busca el Plan del Protocolo',
         'onchange' => '
         $.get( "index.php?r=option/lists&id='.'"+$(this).val(), function(data){
            $("select#protocol-idopcion").html(data);
         });'    

        ]);
    ?>

    <?php 
    //use app\models\Country;
    $options=Option::find()->all();

    //use yii\helpers\ArrayHelper;
    $listData=ArrayHelper::map($options,'idopcion','Nombrecompleto');

    echo $form->field($model, 'idopcion')->dropDownList(
                                    $listData, 
                                    ['prompt'=>'Select...']);
    ?>


    <?= $form->field($model, 'nombredelprotocolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'statustrabajo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>