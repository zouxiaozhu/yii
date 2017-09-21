<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wcc */

$this->title = 'Create Wcc';
$this->params['breadcrumbs'][] = ['label' => 'Wccs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wcc-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
