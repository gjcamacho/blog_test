<?php
App::uses('AppModel', 'Model');

class Post extends AppModel {
	public $hasMany=array(
			"Comment"=>array(
					"className"=>"Comment"
			)
	);
}
?>