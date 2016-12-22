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
 class OrderController extends Controller
 public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        // страница входа в систему и сообщения об ошибке доступны всем
                        'actions' => [ 'login','error'],
                        'allow' => true,
                    ],
                    [
                        // выход из системы только для зарегистрированного пользователя
                        'actions' => ['logout','index', 'delete','ord', 'edit'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
         ];
	}
{
	public function actionOrd()
	{
		$order= Order::find()
		->having('status=0')
		->orderBy(['date_orders'=> SORT_ASC])
		->all();
		return $this->render('ord', ['order' =>$order]);
	}
			public function actionIndex($id){
				$seamstress=Seamstress::find()
				->orderBy(['last_name'=>SORT_ASC])
				->all();
				$customer=Customer::find()
					->orderBy(['last_name'=>SORT_ASC])
					->all();
				$order= Order::findOne($id);
				if (!$order){
						return 'Заказ не найден';
				}
					
					if(isset($_POST['Order'])){
						$order->attributes=$_POST['Order'];
							if($order->save()){
								return $this->render('addorders',['order'=>$order]);
							}
					else {
						throw new \yii\web\NotFoundHttpException('Информация не найдена');
					}
					}
			return $this->render('index',['order'=>$order,'customer'=>$customer,'seamstress'=>$seamstress]);
			}
		
		public function actionDelete($id){
			$order = Order::findOne($id);
			if (!$order){
				return 'Заказ не найден';
			}
				$order->delete();
					return $this->redirect(['order/ord']);
			
		}
}