<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GccSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Post Index';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">
    
    <h1><?= Html::encode($this->title) ?></h1>
    <?php var_export($models);die; ?>
        
        <?=Html::encode($model->name)?>&nbsp;&nbsp;<?=Html::encode($model->addr)?>
        
    <?php //endforeach;?>
    

</div>
