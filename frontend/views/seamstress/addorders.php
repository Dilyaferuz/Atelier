
 <?php Use \yii\helpers\Html; ?>
<h2>Швеи</h2>
<table class="table">
	<tr>
		<th>№ </th> 
		<th>Фамилия </th> 
		<th>Отчество </th> 
		<th>Специализация</th>
		<th></th>
	</tr>
	<?php foreach($seamstress as $seamstress){ ?>
	<tr>
		<td> <?= $seamstress->id_seamstres ?> </td>
		<td> <?= htmlspecialchars($seamstress->last_name) ?> </td>
		<td> <?= htmlspecialchars($seamstress->first_name) ?> </td>
		<td> <?= htmlspecialchars($seamstress->specialization) ?> </td>
		<td> <a class="btn btn-sm btn-success" href="/?r=seamstress/index&id=<?= $seamstress->id_seamstres ?>">Заказать</a> </td>
	</tr>
	 <?php } ?>
	 <tr>

	 </tr>
</table>