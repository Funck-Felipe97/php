<?php 

	session_start();
	include "banco.php";

	$lista_tarefas = buscar_tarefas();
	$_SESSION["tarefas"] = $lista_tarefas;

	if(isset($_POST["nome"]) && $_POST["nome"] != ""){
		$tarefa["nome"] = $_POST["nome"];
		$tarefa["prazo"] = $_POST["prazo"];
		$tarefa["concluida"] = $_POST["concluida"];
		$tarefa["prioridade"] = $_POST["prioridade"];

		gravar_tarefa($tarefa);
		$lista_tarefas[] = $tarefa;

	}
	

?>

