<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController{
	public function index(){
		$this->set('posts',$this->Post->find('all'));
	}
	
	public function add(){
		if($this->request->is("post")){
			debug($this->request->data);
			
			$this->Post->create();
			$this->Post->save($this->request->data);
			
			//$this->redirect(array("controller"=>"posts", "action"=>"index"));
		}
	}
}
?>