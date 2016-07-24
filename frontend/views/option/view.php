<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Option */

$this->title = $model->idplan;
$this->params['breadcrumbs'][] = ['label' => 'Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="option-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idplan' => $model->idplan, 'idopcion' => $model->idopcion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idplan' => $model->idplan, 'idopcion' => $model->idopcion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idplan',
            'idopcion',
            'nombreopcion',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
