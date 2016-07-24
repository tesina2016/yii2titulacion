<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Teachercareer */

$this->title = 'Update Teachercareer: ' . $model->idprofesor;
$this->params['breadcrumbs'][] = ['label' => 'Teachercareers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprofesor, 'url' => ['view', 'id' => $model->idprofesor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teachercareer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
