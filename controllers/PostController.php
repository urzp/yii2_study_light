<?php 

  namespace app\controllers;

use Yii;

class PostController extends AppController
{

	public $layout = 'Basic';

	public function beforeAction($action){
		// debug($action);
		if ($action -> id == 'index'){
			$this->enableCsrfValidation = false;
		}
		return parent::beforeAction($action);
	}

	public function actionIndex(){
		if(Yii::$app->request->isAjax){
			debug($_POST);
			return 'test';
		}
		return $this -> render('test');
	}

	public function actionShow(){
		// $this -> layout = 'Basic';
		return $this -> render('show');
	}

}