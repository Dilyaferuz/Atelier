<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<h2> Регистрация заказчика</h2>
<p class="text-center"> Фамилия <?=htmlspecialchars($seamstress->last_name)?> </p>
	<p class="text-center">Специализация- <?=htmlspecialchars($seamstress->specialization)?></p> 
<p class="text-center">График работы - <?=htmlspecialchars($seamstress->scedule_of_work)?> </p>
<?php $form = ActiveForm::begin();?>
<?= $form->field($customer, 'last_name') ?>
<?= $form->field($customer, 'first_name') ?>
<?= $form->field($customer, 'patronymic') ?>
<?= $form->field($customer, 'telephone') ?>
<?= $form->field($customer, 'note')?>
<button class="btn btn-primary" type="submit" >Отправить </button>

<?php ActiveForm::end();?>