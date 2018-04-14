<?php
include ("cabecalho.php");
?>

<style>
  div{
		background-color: rgb(255,255,255);
		margin: 2px auto;
			border: 4px solid rgb(0,0,0);
			padding: 25px;
			font-size: 20px;
			width: 700px;
	}	
	
	body{
			margin: 100px auto;
			text-align: center;
			font-family: tahoma;
			background-color: rgb(0,174,174);
		}
</style>
<html>
     <body background="imagem.jpg">		
		<form method="POST" action="cadastra_cidade.php">
		<div>
		 <label>Nome Cidade:</label>
		 <input type="text" name="nome_cidade"/>
		
		 <label>Estado:</label>
		 <select name="estado">
			<?php
			if(file_exists("estados.xml")){
				header('content-type:text/html; charset=utf-8');
				$xml = simplexml_load_file('estados.xml');
				
				foreach($xml->estados as $estados){
				echo "<tr>
				<option>$estados->nome</option>";
				}
			}
			?>
		 </select>
		
		
		 <input type="submit" value="Enviar"/>	
		</div>
		</form>
     </body>
		
</html>		