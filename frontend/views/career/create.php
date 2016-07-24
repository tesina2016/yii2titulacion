<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Career */

$this->title = 'CREAR NUEVA CARRERA';
$this->params['breadcrumbs'][] = ['label' => 'CARRERAS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
