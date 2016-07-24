<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Statprotocol */

$this->title = 'Update Statprotocol: ' . $model->idstat;
$this->params['breadcrumbs'][] = ['label' => 'Statprotocols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idstat, 'url' => ['view', 'id' => $model->idstat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statprotocol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
