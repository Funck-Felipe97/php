<?php 

	function linha($semana){
		echo "<tr>";
			for($i = 0 ; $i < 7 ; ++$i){
				if(isset($semana[$i])){
					echo "<td>$semana[$i]</td>";
				}else{
					echo "<td> </td>";
				}
			}
		echo "</tr>";
	}

	function calendario(){
		$dia = 1;
		$semana = array();
		while($dia < 31){
			array_push($semana , $dia);
			if(count($semana) == 7){
				linha($semana);
				$semana = array();
			}
			$dia++;
		}
		linha($semana);
	}


	function saldacoes(){
		$hora = date('H');
		
		if($hora <= 12 && $hora > 6)
			echo "Bom dia";
		if($hora > 12 && $hora <= 18)
			echo "Boa tarde";
		else
			echo "Boa noite";
	}

?>


<table border="1px">
	<tr>
		<th>dom</th>
		<th>seg</th>
		<th>ter</th>
		<th>qua</th>
		<th>qui</th>
		<th>sex</th>
		<th>sab</th>
	</tr>
	
	<?php calendario(); ?>

</table>

<br><br><br>
<h1>  Desafio </h1>
<br>
<?php saldacoes(); ?>
