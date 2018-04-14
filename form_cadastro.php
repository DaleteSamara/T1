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
		<form method="POST" action="cadastra_cadastro.php">
		<div>
		 <label>Nome:</label>
		 <input type="text" name="nome_user"/>
		 
		 <label>Email</label>
		 <input type="email" name="email"/>
		 <br />
		 
		 <label>Sexo:</label>
		 <input type="text" name="sexo"/>
		
		 <label>Cidade/Estado:</label>
		 <select name="cidade_estado">
			<?php
			if(file_exists("cidades.xml")){
				header('content-type:text/html; charset=utf-8');
				$xml = simplexml_load_file('cidades.xml');
				
				foreach($xml->cidades as $cidades){
				echo "<tr>
				<option>$cidades->nome_cidade / $cidades->estado</option>";
				}
			}
			?>
			</select>
		
		 <input type="submit" value="Enviar"/>	
		 </div>
		
		</form>
     </body>
		
</html>		