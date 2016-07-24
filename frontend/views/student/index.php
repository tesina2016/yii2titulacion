<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CATALOGO DE ESTUDIANTES';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('CREAR NUEVO ESTUDIANTE', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idestudiante',
            'nombreestudiante',
            'apellidosestudiante',
            //'telefonolocal',
            'telefonomovil',
            'email:email',
            // 'idcarrera',
            // 'idestado',
            // 'created_at',
            // 'updated_at',
            // 'idplan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
