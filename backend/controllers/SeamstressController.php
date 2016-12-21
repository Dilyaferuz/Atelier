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
 class SeamstressController extends Controller
{
	public function actionSeam(){
		$seamstress= Seamstress::find()
		->orderBy(['Id'=> SORT_ASC,'last_name'=> SORT_ASC])
		->having('status = 1')
		->all();	
		return $this->render('seam', ['seamstress' =>$seamstress]);
	}
		

	public function actionAdd(){
			$seamstress= new Seamstress;
			if(isset($_POST['Seamstress'])){
				$seamstress->attributes=$_POST['Seamstress'];
				if($seamstress->save()){
					return $this->render('add1', ['seamstress'=>$seamstress]);
				}
			}
			return $this->render('add', ['seamstress'=>$seamstress]);
	}
		public function actionDelete ($id)
	{
		$seamstress=Seamstress::findOne($id);
		if (!$seamstress) {
			return 'Швея не  найдена';
		}
		$seamstress->delete();
		return $this->redirect(['seamstress/seam']);
	}	
	public function actionEdit($id){
			$seamstress = Seamstress::findOne($id);
			if (!$seamstress){
				return 'Заказчик не найден';
			}
			if(isset($_POST['Seamstress'])){
				$seamstress->attributes=$_POST['Seamstress'];
				if($seamstress->save()){
					return $this->render('edit');
				}
			}
			return $this->render('add', ['seamstress'=>$seamstress]);
		}
	
}
	