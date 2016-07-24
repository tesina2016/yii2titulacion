<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Teachercareer */

$this->title = 'Create Teachercareer';
$this->params['breadcrumbs'][] = ['label' => 'Teachercareers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachercareer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
