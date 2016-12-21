<?php
	Use \yii\helpers\Html;
?>
<div  class="jumbotron" >  
<h2>
<blockquote class="jumbotron">
	<p>
		<?= htmlspecialchars($seamstress->last_name); ?>
		<?= htmlspecialchars($seamstress->first_name); ?> 
		
	</p>
	<blockquote>
</h2>

<table style="margin: 0 auto;" class="table-success table-condensed table-hover table-striped ">
	<tr>
	 <th>Специализация</th> 
		<th>Телефон</th> 
		<th>Опыт работы</th>
		<th>График работы</th> 
		
	</tr>
	<tr>
		
		<td><?= htmlspecialchars($seamstress->specialization); ?></td>
		<td > <?= htmlspecialchars($seamstress->telephone) ?> </td>
		<td> <?= htmlspecialchars($seamstress->experience) ?> </td>
		<td> <?= htmlspecialchars($seamstress->scedule_of_work) ?> </td>
	</tr>
	</table> 
<p><?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span>Назад', ['seamstress/show', 'id'])?> </p></div>