<?php
App::uses("AppController","Controller");

class UsersController extends AppController{
	public function login(){
		if($this->request->is("post")){
			$username=$this->request->data["User"]["username"];
			$password=$this->request->data["User"]["password"];
			
			if($username=="gjcamacho" && $password="gjcamacho"){
				$this->Session->write("User",array("User"=>array("username"=>"gjcamacho")));
				
				$this->redirect(array("controller"=>"posts", "action"=>"index"));
			}
		}
		
	}
	
}
?>