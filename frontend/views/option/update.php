<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Option */

$this->title = 'Update Option: ' . $model->idplan;
$this->params['breadcrumbs'][] = ['label' => 'Options', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idplan, 'url' => ['view', 'idplan' => $model->idplan, 'idopcion' => $model->idopcion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="option-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
