<!DOCTYPE html>

<html>

	<head>
		<title>Gerenciador de tarefas</title>
		<link rel="stylesheet" type="text/css" href="tarefas.css">
	</head>
	<body>
		<h1>Gerenciador de Tarefas</h1>

		<form method="GET">
			<fieldset>
				<legend>Nova Tarefa</legend>
				<label>
					Tarefa :
					<input type="text" name="nome"/>
				</label>

				<label>
					Prazo :
					<input type="text" name="prazo" />
				</label>

				<fieldset>
					<legend> Prioridade </legend>
					<label>
						<input type="radio" name="prioridade" value="baixa" checked />
						<input type="radio" name="prioridade" value="media" />
						<input type="radio" name="prioridade" value="alta" />
					</label>
				</fieldset>

				<label>
					Tarefa concluida
					<input type="checkbox" name="tarefa-concluida" value=true />
				</label>

				<input type="submit" value="Cadastrar" />
			</fieldset>
		</form>
		
		<table>
			<tr>Tarefas</tr><br/>
			<tr>
				<td> Nome </td>
				<td> Prazo </td>
				<td> Concluida </td>
				<td> Prioridade </td>
			</tr>
			<?php foreach ($lista_tarefas as $tarefa): ?>
		 	
			<tr>
				<td> <?php $tarefa['nome'] ; ?>  </td>
				<td> <?php $tarefa['prazo'] ; ?>  </td>
				<td> <?php $tarefa['prioridade'] ; ?>  </td>
				<td>  </td>
			</tr>
			<?php endforeach; ?>
		</table>

	</body>
</html>