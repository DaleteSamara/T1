<?php

	if(!file_exists("cadastros.xml")){
		
		$fp = fopen("cadastros.xml","w");		
		$corpo_pagina = '<?xml version="1.0"?><cadastro></cadastro>';
		fwrite($fp,$corpo_pagina);
		fclose($fp);
		
	}

    $arquivo = 'cadastros.xml';
    $xml = simplexml_load_file($arquivo);
	
	$nova_posicao = sizeof($xml->cadastros);
	
    $xml->cadastros[$nova_posicao]->nome_user = $_POST["nome_user"];
    $xml->cadastros[$nova_posicao]->email = $_POST["email"];
    $xml->cadastros[$nova_posicao]->sexo = $_POST["sexo"];
    $xml->cadastros[$nova_posicao]->cidade_estado = $_POST["cidade_estado"];


	$xml->asXML($arquivo);
	
	header("location:index.php");

?>