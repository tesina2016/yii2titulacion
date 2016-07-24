<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Teachercareer */

$this->title = $model->idprofesor;
$this->params['breadcrumbs'][] = ['label' => 'Teachercareers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachercareer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idprofesor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idprofesor], [
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
            'idprofesor',
            'idcarrera',
            'created_at',
            'updated_at',
            'idstat',
        ],
    ]) ?>

</div>
