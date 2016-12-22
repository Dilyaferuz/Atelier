<?php Use \yii\helpers\Html; ?>

<table class="table">
  <tr>
	
	<th></th>
	<th>Фамилия</th>
	<th>Специализация</th>
	<th>Дата заказа</th>
	<th>Описание</th>
	<th>Дата примерки</th>
	<th>Цена</th>
	<th>Статус</th>
	<th></th>
  </tr>
  <?php foreach($order as $order){ ?>

  <tr>
	<td><?= $order->id ?></td>
	<td><?= htmlspecialchars($order->getIdCustomer()->one()->last_name) ?> </td>
	<td><?= htmlspecialchars($order->getIdSeamstres()->one()->specialization) ?> </td>
	<td><?= htmlspecialchars($order->date_orders) ?></td>
	<td><?= htmlspecialchars($order->description) ?></td>
	<td><?= htmlspecialchars($order->date_try) ?></td>
	<td><?= htmlspecialchars($order->cost) ?></td>
	<td><?= htmlspecialchars($order->status) ?></td>
	<td>
			<?= Html::a('<span class="glyphicon glyphicon-edit"></span> Редактировать', ['order/index', 'id' =>$order->id], ['class'=>'btn btn-primary']) ?>
		<?= Html::a('<span class="glyphicon glyphicon-remove"></span> Удалить', ['order/delete', 'id' =>$order->id], ['class'=>'btn btn-primary']); ?>
	</td>
  </tr>

  <?php } ?>

 </table>