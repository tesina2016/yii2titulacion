<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */

$this->title = $model->idestudiante;
$this->params['breadcrumbs'][] = ['label' => 'ESTUDIANTES', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ACTUALIZAR', ['update', 'id' => $model->idestudiante], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ELIMINAR', ['delete', 'id' => $model->idestudiante], [
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
            'idestudiante',
            'nombreestudiante',
            'apellidosestudiante',
            'telefonolocal',
            'telefonomovil',
            'email:email',
            'idcarrera',
            'idestado',
            'created_at',
            'updated_at',
            'idplan',
        ],
    ]) ?>

</div>
