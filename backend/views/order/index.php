<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
Use \yii\helpers\Html; ?>
<div  class="jumbotron">
<?php $form = ActiveForm::begin();?>
<?= $form->field($order, 'id_customer') ->listBox(ArrayHelper::map($customer, 'id','last_name'))  ?>
<?= $form->field($order, 'id_seamstres') ->listBox(ArrayHelper::map($seamstress, 'id','last_name'))  ?>
<?= $form->field($order, 'id_seamstres') ->listBox(ArrayHelper::map($seamstress,'id', 'specialization'))  ?>
<?= $form->field($order, 'cost')?>
<?= $form->field($order, 'date_try')->widget(\yii\jui\DatePicker::classname(), [
		'language' => 'ru',
		'dateFormat' => 'yyyy-MM-dd',
	])  ?>					
<?= $form->field($order, 'description') ?>
<?= $form->field($order, 'status')->textInput()?>

<button class="btn btn-primary" type="submit" >Отправить </button>
</div>
<?php ActiveForm::end(); ?>