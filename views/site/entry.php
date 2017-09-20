<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
      $form = ActiveForm::begin();
echo  $form->field($model,'name');
echo  $form->field($model,'email');
//echo $form->field($model,'remember');
?>

<div class="form-group">
<?php echo Html::submitButton('Submit',['class'=>'btn btn-primary']);?>
</div>

<?php  ActiveForm::end();?>
