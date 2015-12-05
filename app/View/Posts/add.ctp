<?php 
	echo $this->Form->create('Post');
	echo $this->Form->input("title");
	echo $this->Form->input("content");
	echo $this->Form->submit("Enviar");
	echo $this->Form->end();
	?>