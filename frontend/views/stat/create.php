<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Stat */

$this->title = 'Crear Nuevo Status de Registro';
$this->params['breadcrumbs'][] = ['label' => 'Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stat-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
