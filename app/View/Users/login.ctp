<?php 
	echo $this->Form->create('User');
	echo $this->Form->input("username");
	echo $this->Form->input("password");
	
	echo $this->Form->submit("Enviar");
	echo $this->Form->end();
	?>