<?php 

  namespace app\controllers;

use Yii;

class PostController extends AppController
{

	// publiLc $layout = 'Basic';

	public function actionIndex(){

		return $this -> render('test');
	}

	public function actionShow(){
		$this -> layout = 'Basic';
		return $this -> render('show');
	}

}