<?php
App::uses('AppController', 'Controller');

class DraftsController extends AppController{
	public function index(){
		$this->set('posts',$this->Post->find('all'));
	}
}
?>