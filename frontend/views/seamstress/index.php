<?php
Use \yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?>

<h2 align = center>Заказ</h2>
<p class="text-center"> Фамилия <?=htmlspecialchars($seamstress->last_name)?> </p>
	<p class="text-center">Специализация- <?=htmlspecialchars($seamstress->specialization)?></p> 
<p class="text-center">График работы - <?=htmlspecialchars($seamstress->scedule_of_work)?> </p>
<table align = center>
	<tr>
	<td>
<div>
<?php
	$clientArray = array();
	$form = ActiveForm::begin();
	echo $form->field($customer, 'last_name')->label('Фамилия');
	echo $form->field($customer, 'first_name')->label('Имя');
	echo $form->field($customer, 'patronymic')->label('Отчество');
	echo $form->field($customer, 'telephone')->label('Телефон');
	echo $form->field($customer, 'note')->label('Заметка');
	echo $form->field($order, 'description')->label('Описание');
?>
<div class="form-group">
    <?= Html::submitButton('Заказать', ['class' => 'btn btn-primary']) ?>
</div>
<?php
	ActiveForm::end();
?>
</div>
</td></tr>
	
</table>