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
		/*public function actionAdd(){
			$seamstress=Seamstress::findOne($id);
			$customer= new Customer;
			if(isset($_POST['Customer'])){
				$customer->attributes=$_POST['Customer'];
				if($customer->save()){
					return $this->render('add1', ['customer'=>$customer]);
				}
			}
			return $this->render('add', ['customer'=>$customer]);
		}

	/*public function actionIndex($id){
		
		$seamstress=Seamstress::findOne($id);
		$customer=Customer::find()
		->all();
		$order= new Order;
		$order->id_seamstres=$id;
		if(isset($_POST['Order'])){
			$order->attributes=$_POST['Order'];
			if($order->save()){
				return $this->render('addorders',['seamstress'=>$seamstress]);
			}
		}
	return $this->render('index',['order'=>$order,'customer'=>$customer,'seamstress'=>$seamstress]);
	}
	*/
	
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
		
		public function actionAdd ($id)
	{  $seamstress=Seamstress::findOne($id);
		$customer=Customer::find()
		->all();
		$order= new Order;
		$order->id_seamstres=$id;
		if(isset($_POST['Order'])){
			$order->attributes=$_POST['Order'];
		$customer = new Customer;
		if ($order->load(Yii::$app->request->post()) && $customer->load(Yii::$app->request->post())) {
			if (!$customer->save()) {
				echo 'Ошибка сохранения клиента';
			} else {
				$order->id_customer = $customer->id;
				$order->id_seamstres = $id;
				$order->status = 0;
				if ($order->save()) {
					return $this->redirect(['seamstress/addorders']);
				} else {
					echo 'Ошибка сохранения заказа';
					echo 'id: '.$order->id_seamstres;
					echo '<br> id: '.$order->id_customer;
					echo '<br>Status: '.$order->status;
					echo '<br>Last Name: '.$customer->last_name;
				}
			}
		} 
			
			$customer=Customer::find()
			->orderBy(['last_name' => SORT_ASC])
			->all ();
			return $this->render('index', ['seamstress' => $seamstress,'customer' => $customer]);
		}
	}
	}