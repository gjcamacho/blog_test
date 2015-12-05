

<table>
<?php
	debug($posts);
	foreach($posts as $post){
		echo "<tr><td>".$post["Post"]["id"]."</td><td>".$post["Post"]["title"]."</td></tr>";
	}

?>
</table>