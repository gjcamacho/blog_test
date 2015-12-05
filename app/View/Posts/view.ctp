<?php 
	debug($post);
	
	//Se muestra el contenido del Post
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
	//Se listan los comentarios
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
	
	//Se añadira un Comment
	
	echo $this->Form->create("Comment",array("controller"=>"comments","action"=>"add"));
	echo $this->Form->input("post_id",array("type"=>"hidden","value"=>$post["Post"]["id"]));
	echo $this->Form->input("comment");
	echo $this->Form->submit();
	echo $this->Form->end();
	
?>