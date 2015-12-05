<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController{
	public function index(){
		$this->set('posts',$this->Post->find('all'));
	}
	
	public function add(){
		if($this->request->is("post")){
			//debug($this->request->data);
			
			$this->Post->create();
			$this->Post->save($this->request->data);
			
			$comment=array("Comment"=>$this->request->data["Comment"]);
			
			$comment["Comment"]["post_id"]=$this->Post->getInsertID();
			
			$this->Post->Comment->create();
			$this->Post->Comment->save($comment);
			
			$this->redirect(array("controller"=>"posts", "action"=>"index"));
		}
	}
	
	public function view($id=null){
		if($id!=null){
			$post=$this->Post->find('first',
					array(
							'conditions'=>array(
									"Post.id"=>$id
							)
					)
				);
			
			$this->set("post",$post);
		}
		
	}
}
?>