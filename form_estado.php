<?php
include ("cabecalho.php");
?>

	<style>
	body{
			margin: 100px auto;
			text-align: center;
			font-family: tahoma;
			background-color: rgb(0,174,174);
		}
	div{
		background-color: rgb(255,255,255);
		margin: 2px auto;
			border: 4px solid rgb(0,0,0);
			padding: 25px;
			font-size: 20px;
			width: 700px;
	}	

	</style>
<html>
     <body background="imagem.jpg">		
		<form method="POST" action="cadastra_estado.php">
		<div>
		 <label>Sigla</label>
		 <input type="text" name="sigla"/>
		
		 <label>Nome do Estado:</label>
		 <input type="text" name="nome"/>
		
		
		
		 <input type="submit" value="Enviar"/>	
		
		</form>
		</div>
     </body>
		
</html>		