<html>
     <body>		
		<form method="POST" action="cadastra_cadastro.php">
		
		 <label>Nome:</label>
		 <input type="text" name="nome_user"/>
		 
		 <label>Email</label>
		 <input type="password" name="email"/>
		 
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
		
		</form>
     </body>
		
</html>		