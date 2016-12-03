  <?php Use \yii\helpers\Html; ?>
<table class="table">
  <tr>
	<th>Дата заказа</th>
	<th>Описание</th>
	<th>Дата примерки</th>
	<th>Стоимость</th>
	  </tr>
  <?php foreach($orders as $order){ ?>
	  <tr>
		<td><?= $order->id ?></td>
		<td><?= htmlspecialchars($order->date_orders) ?></td>
		<td><?= htmlspecialchars($order->description) ?></td>
		<td><?= htmlspecialchars($order->date_try) ?></td>
		<td><?= htmlspecialchars($order->cost) ?></td>
  <td><?= Html::a('<span class="glyphicon glyphicon-pencil"></span> Редактировать', ['order/edit', 'id' =>$order->id], ['class'=>'btn btn-primary']) ?>
				<?php
		 if($order->getAttendances()->count()==0){
		 echo Html::a('<span class="glyphicon glyphicon-remove"></span> Удалить', ['order/delete','id' =>$order->id]);
		 } ?></td>
	  </tr>
  <?php } ?>
  <tr>
  <td colspan='4'></td>
  <td><?= Html::a('<span class="glyphicon glyphicon-plus"></span> Добавить', ['order/add']) ?></td>
   
</table>