<?php Use \yii\helpers\Html; ?>
<table class="table">
  <tr>
	<th>№</th>
	<th>Фамилия</th>
	<th>Имя</th>
	<th>Отчество</th>
	<th>Телефон</th>
	<th>Заметка</th>
	
  </tr>
  <?php foreach($customer as $customer){ ?>
	  <tr>
		<td><?= $customer->id ?></td>
		<td><?= htmlspecialchars($customer->last_name) ?></td>
		<td><?= htmlspecialchars($customer->first_name) ?></td>
		<td><?= htmlspecialchars($customer->patronymic) ?></td>
		<td><?= htmlspecialchars($customer->telephone) ?></td>
		<td><?= htmlspecialchars($customer->note) ?></td>
		<td><?= Html::a('<span class="glyphicon glyphicon-edit"></span> Редактировать', ['customer/edit', 'id' =>$customer->id], ['class'=>'btn btn-primary']) ?>
		<?php if($customer->getOrders()->count()==0){
			echo Html::a('<span class="glyphicon glyphicon-remove"></span> Удалить', ['customer/delete', 'id' =>$customer->id], ['class'=>'btn btn-primary']);
		}  ?></td>
		</tr>	
  <?php } ?>
  <tr>
  <td class="success" colspan='4'></td>

<td><?= Html::a('<span class="glyphicon glyphicon-plus"></span>Регистрация', ['customer/add', 'id'])?> 

		</td> 
</tr>
 </table>
 <p class="jumbotron"><a class="btn btn-default" href="http://admin.ru/index.php">&laquo;На главную </a></p>