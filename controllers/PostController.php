<?php 

  namespace app\controllers;



class PostController extends AppController
{

	public function actionTest(){
		return $this -> render('test');
	}
}