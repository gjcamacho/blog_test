

<table>
<?php

	for($i=0;$i<count($posts);$i++){
		$post=$posts[$i];
		
		debug($post);
	}
	foreach($posts as $post){
		echo "<tr><td>".$post["Post"]["id"]."</td><td>".$post["Post"]["title"]."</td></tr>";
	}

?>
</table>