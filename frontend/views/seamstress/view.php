<?php 
	Use \yii\helpers\Html; 
?> 
<h2 style='text-align:center;'>
	<p class="text-center"></p>
</h2>
<table style="margin: 0 auto;" class="table-success table-condensed table-hover table-striped ">
	<tr class = "danger">
		<th>№ </th> 
		<th>Фамилия </th> 
		<th>Имя </th> 
		<th>Специализация </th> 
		<th>Узнать побробнее </th> 
	</tr>
	<?php foreach($seamstress as $seamstress){ 
			<tr>
				<td class = "active"> <?= $seamstress->id ?> </td>
				<td class = "success"> <?= htmlspecialchars($seamstress->last_name) ?> </td>
				<td class = "success"> <?= htmlspecialchars($seamstress->first_name) ?> </td>
				<td class = "success"> <?= htmlspecialchars($seamstress->specialization) ?> </td>
				<td class = "warning"> <?= Html::a('Подробнее', ['seamstress/view2', 'id' => $seamstress ->id]) ?> </td>
			</tr>		
	 <? }
	} 
	</table>