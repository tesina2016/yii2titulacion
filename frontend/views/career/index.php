<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CATALOGO DE CARRERAS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('CREAR NUEVA CARRERA', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombredecarrera',
            'nombredecarreracorto',
            'statusdecarrera',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
