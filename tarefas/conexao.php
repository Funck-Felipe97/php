<?php 

	function getConnection(){
		return new mysqli("localhost:3306" , "root" , "felipe" , "tarefas");
	}

 ?>