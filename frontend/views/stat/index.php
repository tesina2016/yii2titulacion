<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CATALOGO DE ESTADOS DE REGISTROS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('CREAR NUEVO ESTADO', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idstat',
            'nombrestat',
            'nombrestatcorto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
