<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use \common\models\Seamstress;
use \common\models\Customer;
use \common\models\Order;
	class SeamstressController extends Controller {
		public function actionShow(){
			$seamstress= Seamstress::find()
		->having('status=1')
		->orderBy(['Id'=> SORT_ASC,'last_name'=> SORT_ASC])
			->all();
			return $this->render('seamstress',['seamstress'=>$seamstress]);
			if ($seamstress){
				return $this->render('seamstress',['seamstress'=>$seamstress]);
			} else {
			throw new \yii\web\NotFoundHttpException('Швея не найдена');
			}
		
	return $this->render('add', ['customer'=>$customer,'seamstress'=>$seamstress ]);
		}
	public function actionView2($id){
		$seamstress = Seamstress::findOne($id);
		if ($seamstress) {
			return $this->render('view2',['seamstress' => $seamstress]);
		} else {
			throw new \yii\web\NotFoundHttpException('Информация не найдена');
			}
	}
			public function actionMain(){
			$seamstress= Seamstress::find()
		->having('status=1')
		->orderBy(['specialization'=> SORT_ASC])
			->all();
			return $this->render('main',['seamstress'=>$seamstress]);
			if ($seamstress){
				return $this->render('main',['seamstress'=>$seamstress]);
			} else {
			throw new \yii\web\NotFoundHttpException('Информация не найдена');
			}
		}
		
		public function actionAdd(){ 
			$order= new Order; 
			$customer= new Customer; 
			$seamstress=Seamstress::find() 
			->orderBy(['specialization'=>SORT_ASC]) 
			->all(); 
			if ($order->load(Yii::$app->request->post()) && $customer->load(Yii::$app->request->post())) { 
				if (!$customer->save()) { 
				echo 'Ошибка сохранения заказчика'; 
			} else { 
			$order->id_customer = $customer->id; 
			$order->status = 0; 
			if ($order->save()) { 
				return $this->render('addorders', ['customer'=>$customer]); 
			} else { 
				echo 'Ошибка сохранения заказа'; 
				echo '<br>ClientID: '.$order->id_customer; 
				echo '<br>Status: '.$order->status; 
				echo '<br>Last Name: '.$customer->last_name; 
			} 
			} 
			} 
				return $this->render('index', ['order'=>$order, 'seamstress'=>$seamstress, 'customer'=>$customer]); 

		}
}