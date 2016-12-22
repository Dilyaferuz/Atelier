<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use \common\models\Seamstress;
use \common\models\Customer;
use \common\models\Order;
/**
 * Site controller
 */
 class CustomerController extends Controller
{
	public function actionCust(){
		$customer= Customer::find()
		->orderBy(['Id'=> SORT_ASC,'last_name'=> SORT_ASC])
		->all();	
		return $this->render('cust', ['customer' =>$customer]);
	}
		

	public function actionAdd(){
			$customer= new Customer;
			if(isset($_POST['Customer'])){
				$customer->attributes=$_POST['Customer'];
				if($customer->save()){
					return $this->render('add1', ['customer'=>$customer]);
				}
			}
			return $this->render('add', ['customer'=>$customer]);
	}
		public function actionDelete ($id)
	{
		$customer=Customer::findOne($id);
		if (!$customer) {
			return 'Заказчик не  найден';
		}
		$customer->delete();
		return $this->redirect(['customer/cust']);
	}	
	public function actionEdit($id){
			$customer = Customer::findOne($id);
			if (!$customer){
				return 'Заказчик не найден';
			}
			if(isset($_POST['Customer'])){
				$customer->attributes=$_POST['Customer'];
				if($customer->save()){
					return $this->render('edit');
				}
			}
			return $this->render('add', ['customer'=>$customer]);
		}
}