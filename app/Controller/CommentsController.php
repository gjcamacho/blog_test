<?php
App::uses('AppController', 'Controller');

class CommentsController extends AppController{
	public function add(){
		if($this->request->is("post")){
			$this->Comment->create();
			$this->Comment->save($this->request->data);
			
			$this->redirect(array("controller"=>"posts","action"=>"view",$this->request->data["Comment"]["post_id"]));
		}
	}
}
?>