<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idprofesor',
            'nombreprofesor',
            'apellidosprofesor',
            'telefonolocal',
            'telefonomovil',
            // 'email:email',
            // 'idestado',
            // 'created_at',
            // 'updated_at',
            // 'cedulaprofesional',
            // 'ultimogrado',
            // 'titulocorto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
