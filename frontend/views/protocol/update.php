<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Protocol */

$this->title = 'Update Protocol: ' . $model->idprotocolo;
$this->params['breadcrumbs'][] = ['label' => 'Protocols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprotocolo, 'url' => ['view', 'id' => $model->idprotocolo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="protocol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
