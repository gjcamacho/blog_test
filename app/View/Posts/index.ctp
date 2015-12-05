

<table>
<?php
	//debug($posts);
	foreach($posts as $post){
		echo "<tr><td>".$post["Post"]["id"]."</td><td>".$this->Html->link($post["Post"]["title"],array("action"=>"view",$post["Post"]["id"]))."</td></tr>";
	}

?>
</table>