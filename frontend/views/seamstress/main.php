<?php
use yii\bootstrap;
use yii\helpers\ArrayHelper;
Use \yii\helpers\Html; 
use yii\imagine\Image;?>
		  <h2> <p  class="jumbotron">НАШИ РАБОТЫ:</p></h2>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/HFpvWVPdUWQ" frameborder="0" allowfullscreen></iframe>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/vR1WUgkJOQY" frameborder="0" allowfullscreen></iframe>
<div  class="jumbotron">
<h2>НАШИ УСЛУГИ </h2>
<table class="table">
    <?php foreach($seamstress as $seamstress){ ?>
  <tr>
	<td><?= htmlspecialchars($seamstress->specialization) ?></td>
	</tr>
  <?php } ?>
 </table>
 <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span> Просмотреть', ['seamstress/show'], ['class'=>'btn btn-primary']) ?>
 		  </div>