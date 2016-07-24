<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Statprotocols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statprotocol-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Statprotocol', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idstat',
            'nombrestat',
            'nombrestatcorto',
            'created_at',
            'updated_at',
            // 'idstatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
