<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gcc */

$this->title = 'Create Gcc';
$this->params['breadcrumbs'][] = ['label' => 'Gccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gcc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
