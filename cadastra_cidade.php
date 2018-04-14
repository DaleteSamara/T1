<?php

	if(!file_exists("cidades.xml")){
		
		$fp = fopen("cidades.xml","w");		
		$corpo_pagina = '<?xml version="1.0"?><cidade></cidade>';
		fwrite($fp,$corpo_pagina);
		fclose($fp);
		
	}

    $arquivo = 'cidades.xml';
    $xml = simplexml_load_file($arquivo);
	
	$nova_posicao = sizeof($xml->cidades);
	
    $xml->cidades[$nova_posicao]->nome_cidade = $_POST["nome_cidade"];
    $xml->cidades[$nova_posicao]->estado = $_POST["estado"];


	$xml->asXML($arquivo);
	header("location:form_cidade.php");

?>