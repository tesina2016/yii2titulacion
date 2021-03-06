<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Teacher */

$this->title = 'Update Teacher: ' . $model->idprofesor;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprofesor, 'url' => ['view', 'id' => $model->idprofesor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
