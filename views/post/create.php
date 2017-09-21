<?php
use yii\helpers\Html;

$this->title = 'create Post';
?>

<?php
Html::beginForm();

$this->params['breadcrumbs'][] = ['label' => 'Post', 'url' => ['view']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<?= $this->render('_form', ['model' => $model]) ?>
<?php

Html::endForm();
?>