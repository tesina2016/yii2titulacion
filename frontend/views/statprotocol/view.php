<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Statprotocol */

$this->title = $model->idstat;
$this->params['breadcrumbs'][] = ['label' => 'Statprotocols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statprotocol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idstat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idstat], [
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
            'idstat',
            'nombrestat',
            'nombrestatcorto',
            'created_at',
            'updated_at',
            'idstatus',
        ],
    ]) ?>

</div>
