<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Protocols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="protocol-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Protocol', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idprotocolo',
            'idestudiante',
            'idplan',
            'idopcion',
            'nombredelprotocolo',
            // 'created_at',
            // 'updated_at',
            // 'statustrabajo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
