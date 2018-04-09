<?php
	echo "Cadastrado realizado com sucesso !";
	
	header('Content-Type: text/html; charset=utf-8');
	
	$xml = simplexml_load_file('estados.xml');
	
	echo "<table border=1>
		<tr>
			<th>Sigla</th>
			<th>Nome Estado</th>
			</tr>
		";
	foreach($xml->estados as $estados){
 		echo "<tr>
			<td>$estados->sigla</td>
			<td>$estados->nome</td>
			</tr>";
	}
	echo "</table>";
	echo "<a href='form_estado.php'>Voltar ao formulário</a>";
?>