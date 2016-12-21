<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<h2> Регистрация заказчика</h2>
<?php $form = ActiveForm::begin();?>
<?= $form->field($customer, 'last_name') ?>
<?= $form->field($customer, 'first_name') ?>
<?= $form->field($customer, 'patronymic') ?>
<?= $form->field($customer, 'telephone') ?>
<?= $form->field($customer, 'note')?>
<button class="btn btn-primary" type="submit" >Вывести </button>

<?php ActiveForm::end();?>