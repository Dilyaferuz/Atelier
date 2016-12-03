<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Order;
use frontend\models\Customer;

/**
 * Site controller
 */
class OrderController extends Controller
{
	public function actionIndex()
	{
		$orders= Order::find()
		->having('status = 1')
		->all();
		return $this->render('index', ['orders' =>$orders]);
	}
		public function actionView($id){
			$order = Order::findOne($id);
			if ($order){
				return $this->render('view', ['order'=>$order]); //вывели представление view
			}else{
				return 'Заказ не найден';
			}
			$order->delete();
			return $this->redirect(['order/index']);
			
		}
		// /?r=order/edit&id=1
		public function actionEdit($id) {
			$order = Order::findOne($id);
			if (!$order){
				return 'Заказ не найден';
			}
			$customer=Customer::find()->all();
			if(isset($_POST['Order'])){
				$order->attributes=$_POST['Order'];
				if($order->save()){
					return $this->redirect(['order/index']);
				}
			}
			return $this->render('add', ['order'=>$order,'customers'=>$customers ]);
		}
		public function actionAdd($customer=null){
			$order= new Order;
			$order->id_customer=$customer;
			$customers=Customer::find()->
			having('status=1')->all();
			if(isset($_POST['Order'])){
				$order->attributes=$_POST['Order'];
				if($order->save()){
					return $this->redirect(['order/index']);
				}
			}
			return $this->render('add', ['order'=>$order, 'customers'=>$customers]);
		}
}