<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Career */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'CARRERAS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ACTUALIZAR', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ELIMINAR', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'CONFIRME LA ACCION DE ELIMINAR ESTE REGISTRO?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombredecarrera',
            'nombredecarreracorto',
            'statusdecarrera',
        ],
    ]) ?>

</div>
