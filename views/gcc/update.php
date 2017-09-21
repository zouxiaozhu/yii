<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gcc */

$this->title = 'Update Gcc: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Gccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gcc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
