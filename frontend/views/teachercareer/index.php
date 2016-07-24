<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachercareers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachercareer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teachercareer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idprofesor',
            'idcarrera',
            'created_at',
            'updated_at',
            'idstat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
