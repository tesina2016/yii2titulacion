<?php
$provincia = ArrayHelper::map(Provincias::find()->all(), 'provincia_id', 'provincia');
echo $form->field($model, 'provincia_id')->dropDownList(
    $provincia,
    [
        'prompt'=>'Por favor elija una',
        'onchange'=>'
                        $.get( "'.Url::toRoute('dependent-dropdown/departamento').'", { id: $(this).val() } )
                            .done(function( data ) {
                                $( "#'.Html::getInputId($model, 'departamento_id').'" ).html( data );
                            }
                        );
                    '
    ]
);
?>
 
<?php echo $form->field($model, 'departamento_id')->dropDownList(array(),
    [
        'prompt'=>'Por favor elija uno',
        'onchange'=>'
                        $.get( "'.Url::toRoute('dependent-dropdown/localidad').'", { id: $(this).val() } )
                            .done(function( data ) {
                                $( "#'.Html::getInputId($model, 'localidad_id').'" ).html( data );
                            }
                        );
                    '
    ]
); ?>;
 

-------------

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


----------
'onchange' => '
         $.post( "index.php?r=student/lists&id='.'"+$(this).val(), function(data){
            $("select#protocol-idplan").html(data);
         });'

         'onchange' => '
         $.post( "index.php?r=option/lists&id='.'"+$(this).val(), function(data){
            $("select#protocol-idopcion").html(data);
         });'    

    <?php $form = ActiveForm::begin(); 

        /* Detectamos si es un Insert o un Update */

        if($model->isNewRecord) {    
            echo $form->field($model, 'id')->textInput();    
        } else {
            echo $form->field($model, 'id')->textInput(['readonly' => 'true']);            
        }
    ?>


        if ($model->load(Yii::$app->request->post())) {

            // Actualizamos los campos de fecha que no capturo el usuario
            $model->created_at = date('Y-m-d h:m:s');
            $model->updated_at = date('Y-m-d h:m:s');

            $model->save();

use yii\helpers\ArrayHelper;
use frontend\models\Stat;

    <div class="row">
        <div class="col-sm-4 col-xd-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Datos Generales</div>            
                <div class="panel-body">
				</div>            
            </div>
        </div>
    </div>


                             'onchange'=>'
                        $.get( "'.Url::toRoute('/frontend/models/OptionOpcionesplan').'", 
                        { id: $(this).val() } )
                            .done(function( data ) {
                                $( "#'.Html::getInputId($model, 'idopcion').'" ).html( data );
                            }
                        );
                        '   


-----------------

<?= $form->field($model, 'idestudiante')->dropdownList(
        ArrayHelper::map(Student::find()->select(['apellidosestudiante','nombreestudiante','idestudiante'])->all(),'idestudiante','Nombrecompleto'),
        ['prompt' => 'Busca el Alumno del Protocolo',
         'onchange' => '$post("index.php?r=plan/lists&id='.'" $(this).val(), function(data){
            $("select#protocol-idplan").html(data);
         })'
        ]); ?>
        

<?php

$provincia = ArrayHelper::map(Provincias::find()->all(), 'provincia_id', 'provincia');
echo $form->field($model, 'provincia_id')->dropDownList(
    $provincia,
    [
        'prompt'=>'Por favor elija una',
        'onchange'=>'
                        $.get( "'.Url::toRoute('dependent-dropdown/departamento').'", { id: $(this).val() } )
                            .done(function( data ) {
                                $( "#'.Html::getInputId($model, 'departamento_id').'" ).html( data );
                            }
                        );
                    '
    ]
);
?>
 
<?php echo $form->field($model, 'departamento_id')->dropDownList(array(),
    [
        'prompt'=>'Por favor elija uno',
        'onchange'=>'
                        $.get( "'.Url::toRoute('dependent-dropdown/localidad').'", { id: $(this).val() } )
                            .done(function( data ) {
                                $( "#'.Html::getInputId($model, 'localidad_id').'" ).html( data );
                            }
                        );
                    '
    ]
); ?>;
 
<?php
if ($model->isNewRecord)
    echo $form->field($model, 'localidad_id')->dropDownList(['prompt'=>'Por favor elija una']);
else
{
    $localidad = ArrayHelper::map(Localidades::find()->where(['localidad_id' =>$model->localidad_id])->all(), 'localidad_id', 'localidad');
    echo $form->field($model, 'localidad_id')->dropDownList($localidad);
}
?>

    <?= $form->field($model, 'idplan')->dropdownList(
        ArrayHelper::map(Plan::find()->all(),'idplan','idplan'),
        [
        'prompt' => 'Busca el Plan de Estudio',
        'onchange' => '
                 $.post( "index.php?r=option/lists&id='.'"+$(this).val(), function(data){
            $("select#protocol2-idopcion").html(data);
         });'         

        ]);?>


           public function actionOpcionesplan($idplan){
        $rows = \app\models\Opcion::find()->where(['idplan' => $idplan])->all();
 
        echo "<option>Selecione una Opcion de Titulacion</option>";
 
        if(count($rows)>0){
            foreach($rows as $row){
                echo "<option value='$row->idopcion'>$row->nombreopcion</option>";
            }
        }
        else{
            echo "<option>No hay Opciones de Titulacion</option>";
        }
 
    }