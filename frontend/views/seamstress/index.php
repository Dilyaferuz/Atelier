<?php
Use \yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?><div  class="jumbotron">
<h2> Заказ</h2>
<?php $form = ActiveForm::begin();?>
	<?=$form->field($customer, 'last_name')->label('Фамилия');?>
	<?=$form->field($customer, 'first_name')->label('Имя');?>
	<?=$form->field($customer, 'patronymic')->label('Отчество');?>
	<?=$form->field($customer, 'telephone')->label('Телефон');?>
	<?=$form->field($customer, 'note')->label('Заметка');?>
	<?=$form->field($order, 'id_seamstres')->listBox(ArrayHelper::map($seamstress, 'id', 'specialization'));?>
	<?=$form->field($order, 'description')->label('Описание');?>
<button class="btn btn-primary" type="submit" > Отправить </button>
<?php ActiveForm::end();?>
</div>