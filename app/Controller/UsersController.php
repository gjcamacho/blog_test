<?php
App::uses("AppController","Controller");

class UsersController extends AppController{
	public function login(){
		if($this->request->is("post")){
			$username=$this->request->data["User"]["username"];
			$password=$this->request->data["User"]["password"];
			
			$user=$this->User->find('first',array('conditions'=>array('User.username'=>$username,'User.password'=>$password)));
			
			if($username==$user["User"]["username"] && $password=$user["User"]["password"]){
				$this->Session->write("User",array("User"=>array("username"=>"gjcamacho")));
				
				$this->redirect(array("controller"=>"posts", "action"=>"index"));
			}
		}
		
	}
	
	public function logout(){
		$this->Session->destroy();
		
		$this->redirect(array("controller"=>"users","action"=>"login"));
	}
	
}
?>