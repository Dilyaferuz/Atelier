<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<div  class='jumbotron'>
<h2> Добавление швеи</h2>
<?php $form = ActiveForm::begin();?>
<?= $form->field($seamstress, 'last_name') ?>
<?= $form->field($seamstress, 'first_name') ?>
<?= $form->field($seamstress, 'specialization') ?>
<?= $form->field($seamstress, 'telephone')?>
<?= $form->field($seamstress, 'experience')?>
<?= $form->field($seamstress, 'scedule_of_work')?>
<?= $form->field($seamstress, 'status')->checkBox()?>
<button class="btn btn-primary" type="submit" >Вывести </button>

<?php ActiveForm::end();?>
</div>