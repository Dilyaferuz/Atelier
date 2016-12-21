<?php Use \yii\helpers\Html; ?>

<table style="margin: 0 auto;" class="table-success table-condensed table-hover table-striped ">
  <tr class="danger">
	<th>№</th>
	<th>Фамилия</th>
	<th>Имя</th>
	<th>Специализация</th>
	<th>Подробнее</th>
  </tr>
  <?php foreach($seamstress as $seamstress){ ?>
	  <tr>
		<td class="success"><?= $seamstress->id ?></td>
		<td class="danger"><?= htmlspecialchars($seamstress->last_name) ?></td>
		<td class="success"><?= htmlspecialchars($seamstress->first_name) ?></td>
		<td "success"><?= htmlspecialchars($seamstress->specialization) ?></td>
		<td "danger"><?= Html::a('Подробнее', ['seamstress/view2', 'id' => $seamstress ->id]) ?></td>
		<td><?= Html::a('<span class="glyphicon glyphicon-plus"></span> Оформить заказ', ['seamstress/add', 'id'])?> <td> </tr>
 
			
  <?php } ?>
  <tr>
  <td class="success" colspan='4'></td>

</table>
  <p class="jumbotron" ><?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span> На главную', ['seamstress/main'])?></a>