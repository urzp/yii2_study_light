<?php 

  namespace app\controllers;

use Yii;

class PostController extends AppController
{

	public $layout = 'Basic';

	public function actionIndex(){

		return $this -> render('test');
	}

	public function actionShow(){
		// $this -> layout = 'Basic';
		return $this -> render('show');
	}

}