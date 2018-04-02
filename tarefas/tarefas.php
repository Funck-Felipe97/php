<?php 

	session_start();

	include "banco.php";

	/*
	Sessões
	if(isset($_SESSION['lista_tarefas'])){
		$lista_tarefas = $_SESSION['lista_tarefas']; 
	}else{
		$lista_tarefas = array();
	}
	*/

	$lista_tarefas = buscar_tarefas($conexao);
	
	
	if(isset($_GET['nome']) && $_GET['nome'] != ''){
		$tarefa['nome'] = $_GET['nome'];
		if(isset($_GET['prazo'])){
			$tarefa['prazo'] = $_GET['prazo'];
		}else{
			$tarefa['prazo'] = $_GET['prazo'];
		}

		$tarefa['prioridade'] = $_GET['prioridade'];

		if(isset($_GET['concluida'])){
			$tarefa['concluida'] = $_GET['concluida'];
		}else{
			$tarefa['concluida'] = '';
		}

		$_SESSION['lista_tarefas'][] = $tarefa;

		gravar_tarefa($conexao , $tarefa);

	}
	
	

	include "template.php";

?>

