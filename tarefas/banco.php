<?php 
	
	$bdServidor = "localhost:3306";
	$bdUsuario = 'root';
	$bdSenha = 'felipe';
	$bdBanco = 'tarefas';

	$conexao = mysqli_connect($bdServidor , $bdUsuario , $bdSenha , $bdBanco);

	if(mysqli_connect_errno($conexao)){
		echo "Erro com a conexão";
		die();
	}

	function buscar_tarefas($conexao){
		$sqlBusca = "select *from tarefa";
		$resultado = mysqli_query($conexao , $sqlBusca);

		$tarefas = array();

		while ($tarefa = mysqli_fetch_assoc($resultado)) {
			$tarefas[] = $tarefa;
		}

		return $tarefas;
	}

	function gravar_tarefa($conexao , $tarefa){
		$sqlGravar = "
			INSERT INTO tarefa
				(nome , prioridade)
				VALUES (
					'{$tarefa['nome']}',
					'{$tarefa['prioridade']}'
					);
		";
		mysqli_query($conexao , $sqlGravar);
	}

 ?>