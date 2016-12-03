<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<h2> Добавление заказа</h2>
<?php $form = ActiveForm::begin();?>
<?= $form->field($order, 'id_customer') ->listBox(ArrayHelper::map($custemers,'id','last_name'))?>
<?= $form->field($order, 'id_seamstres') ->listBox(ArrayHelper::map($seamstres,'id','last_name'))?>
<?= $form->field($order, 'date_orders') ?>
<?= $form->field($order, 'description') ?>
<?= $form->field($order, 'date_try') ?>
<?= $form->field($order, 'cost') ?>
<?= $form->field($student, 'status')->checkBox() ?>

<button class="btn btn-primary" type="submit" >Сохранить </button>
<?php ActiveForm::end();?>