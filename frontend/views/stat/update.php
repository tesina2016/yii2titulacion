<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Stat */

$this->title = 'Update Stat: ' . $model->idstat;
$this->params['breadcrumbs'][] = ['label' => 'Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idstat, 'url' => ['view', 'id' => $model->idstat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
