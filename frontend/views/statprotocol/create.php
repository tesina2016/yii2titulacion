<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Statprotocol */

$this->title = 'Create Statprotocol';
$this->params['breadcrumbs'][] = ['label' => 'Statprotocols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statprotocol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
