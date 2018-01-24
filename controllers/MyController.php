<?php 
 namespace app\controllers;

 


class MyController extends AppController
{
	 
	public function actionIndex($id = null){
		$hi = "hello, world";
		if (!$id) $id = "test";
		$names = ['Ivanov', 'Petrov', 'Sidorov'];
		// return $this->render('index',['hello'=> $hi, 'names' => $names ]);
		return $this->render('index',compact('hi', 'names', 'id'));
	}

	public function actionBlogPost(){
		// my/blog-post
		return "BLOG POST"; 
	} 


}