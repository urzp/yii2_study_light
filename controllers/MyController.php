<?php 
 namespace app\controllers;

 use yii\web\Controller;


class MyController extends Controller
{
	 
	public function actionIndex($id = null){
		$hi = "hello, world";
		if (!$id) $id = "test";
		$names = ['Ivanov', 'Petrov', 'Sidorov'];
		// return $this->render('index',['hello'=> $hi, 'names' => $names ]);
		return $this->render('index',compact('hi', 'names', 'id'));
	}

}