<?php 
	
	include "conexao.php";

	function buscar_tarefas(){
		$sqlBusca = "select *from tarefa";
		$conexao = getConnection();
		$resultado = $conexao->query($sqlBusca);
		$tarefas = array();

		foreach ($resultado as $var) {
			$tarefa["nome"] = $var["nome"];
			$tarefa["prioridade"] = $var["prioridade"];
			$tarefa["finalizada"] = $var["finalizada"];
			$tarefa["prazo"] = $var["prazo"];
			$tarefas[] = $tarefa;
			$tarefa = array();
		}

		return $tarefas;
	}

	function gravar_tarefa($tarefa){
		$conexao = getConnection();
		$sqlGravar = "
			INSERT INTO tarefa
				(nome , prioridade)
				VALUES (
					'{$tarefa['nome']}',
					'{$tarefa['prioridade']}'
					);
		";
		$conexao->query($sqlGravar);
	}

 ?>