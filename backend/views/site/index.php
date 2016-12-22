
<?php Use \yii\helpers\Html; ?>
<?php
/* @var $this yii\web\View */

$this->title = 'Ателье';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Добро пожаловать!</h1>

          <div class="jumbotron">
		  <p class="btn btn-default" ><?= Html::a('<span></span> Швеи', ['seamstress/seam'])?></a>
		   <p class="btn btn-default" ><?= Html::a('<span></span> Заказчики', ['customer/cust'])?></a>
		    <p class="btn btn-default" ><?= Html::a('<span></span> Заказы', ['order/ord'])?></a>
               
                </div>
     </div>
