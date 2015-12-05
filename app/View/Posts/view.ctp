<?php 
	debug($post);
?>

<table>
	<tr>
		<td>ID</td>
		<td>
			<?php echo $post["Post"]["id"];?>
		</td>
	</tr>
	<tr>
		<td>Titulo</td>
		<td>
			<?php echo $post["Post"]["title"];?>
		</td>
	</tr>
	<tr>
		<td>Contenido</td>
		<td>
			<?php echo $post["Post"]["content"];?>
		</td>
	</tr>
</table>

<?php 
	$comments=$post["Comment"];
	
	if(count($comments)>0){
		
		?>
		<table>
			<?php 
				foreach($comments as $comment){
					echo "<tr><td>Comentario</td><td>".$comment["comment"]."</td></tr>";
				}
			?>
		</table>
		<?php
		
	}
?>