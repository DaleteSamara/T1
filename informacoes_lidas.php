<?php
	header('Content-Type: text/html; charset=utf-8');
	
	if(file_exists("estados.xml")){
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
	} else{
		echo "<tr> <td rowspan='2'>Nada cadastrado ainda</td> </tr>";
	}
	
	//----------------------------------------------------
	
	header('Content-Type: text/html; charset=utf-8');
	
	if(file_exists("cidades.xml")){
		$xml = simplexml_load_file('cidades.xml');
		
		echo "<table border=1>
				<tr>
				<th>Nome Cidade</th>
				<th>Estado</th>
				</tr>
			";
		foreach($xml->cidades as $cidades){
			echo "<tr>
				<td>$cidades->nome_cidade</td>
				<td>$cidades->estado</td>
				</tr>";
		}
		echo "</table>";
	} else{
		echo "<tr> <td rowspan='2'>Nada cadastrado ainda</td> </tr>";
	}
	
	//---------------------------------------------------------
	
	header('Content-Type: text/html; charset=utf-8');
	
	if(file_exists("cadastros.xml")){
		$xml = simplexml_load_file('cadastros.xml');
		
		echo "<table border=1>
			<tr>
				<th>Nome Usuário</th>
				<th>Email</th>
				<th>Sexo</th>
				<th>Cidade/Estado</th>
				</tr>
			";
		foreach($xml->cadastros as $cadastros){
			echo "<tr>
				<td>$cadastros->nome_user</td>
				<td>$cadastros->email</td>
				<td>$cadastros->sexo</td>
				<td>$cadastros->cidade_estado</td>
				</tr>";
		}
		echo "</table>";
	} else{
		echo "<tr> <td rowspan='2'>Nada cadastrado ainda</td> </tr>";
	}
	
?>