<?php
use yii\bootstrap\ActiveForm; ?>
<?php Use \yii\helpers\Html; ?>
<h2> Информация по оформление заказа:  </h2>
	<p> Фамилия <?=htmlspecialchars($seamstress->getSeamstress()->one()->first_name)?> </p>
	<p>Специализация- <?=htmlspecialchars($seamstress->getSeamstress()->one()->specialization)?></p> 
<p>График работы - <?=htmlspecialchars($seamstress->getSeamstress()->one()->scedule_of_work)?> </p>
<?php $form = ActiveForm::begin();?>
<?= $form->field($order, 'id_customer') ->listBox(ArrayHelper::map($customer, 'last_name', 'first_name','patronymic'))  ?>

<?= $form->field($order, 'date_orders')->widget(\yii\jui\DatePicker::classname(), [
		'language' => 'ru',
		'dateFormat' => 'yyyy-MM-dd',
	])  ?>
	<?= $form->field($order, 'description') ?>
<button class="btn btn-primary" type="submit">Добавить</button>
<?php ActiveForm::end(); ?>

