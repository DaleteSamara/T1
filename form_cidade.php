<html>
     <body>		
		<form method="POST" action="cadastra_cidade.php">
		
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
		
		</form>
     </body>
		
</html>		