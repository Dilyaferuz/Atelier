<?php 
	Use \yii\helpers\Html; 
?> 
<h2 style='text-align:center;'>
	<p class="text-center"></p>
</h2>
<table style="margin: 0 auto;" class="table-success table-condensed ">
	<tr class = "danger">
		<th>№ </th> 
		<th>Фамилия </th> 
		<th>Имя </th> 
		<th>Специализация </th> 
		<th>Телефон</th> 
		<th>Опыт работы</th>
		<th>График работы</th> 
	 </tr>
  <?php foreach($seamstress as $seamstress){ ?>
	  <tr>
				<td class = "active"> <?= $seamstress->id ?> </td>
				<td class = "success"> <?= htmlspecialchars($seamstress->last_name) ?> </td>
				<td class = "success"> <?= htmlspecialchars($seamstress->first_name) ?> </td>
				<td class = "success"> <?= htmlspecialchars($seamstress->specialization) ?> </td>
				<td > <?= htmlspecialchars($seamstress->telephone) ?> </td>
				<td> <?= htmlspecialchars($seamstress->experience) ?> </td>
				<td> <?= htmlspecialchars($seamstress->scedule_of_work) ?> </td>
		<td><?= Html::a('<span class="glyphicon glyphicon-edit"></span> Редактировать', ['seamstress/edit', 'id' =>$seamstress->id], ['class'=>'btn btn-primary']) ?>
		<?php if($seamstress->getOrders()->count()==0){
			echo Html::a('<span class="glyphicon glyphicon-remove"></span> Удалить', ['seamstress/delete', 'id' =>$seamstress->id], ['class'=>'btn btn-primary']);
		}  ?></td>
		</tr>	
  <?php } ?>
  <tr>
  <td class="success" colspan='4'></td>

<td><?= Html::a('<span class="glyphicon glyphicon-plus"></span>Добавление', ['seamstress/add', 'id'])?> 

		</td> 
</tr></tr>
 </table>
 <div class="jumbotron">
     <p class="btn btn-default" ><?= Html::a('<span></span> &laquo;На главную', ['site/index'])?></a>
 </div>