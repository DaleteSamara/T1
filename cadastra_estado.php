<?php

	if(!file_exists("estados.xml")){
		
		$fp = fopen("estados.xml","w");		
		$corpo_pagina = '<?xml version="1.0"?><estado></estado>';
		fwrite($fp,$corpo_pagina);
		fclose($fp);
		
	}

    $arquivo = 'estados.xml';
    $xml = simplexml_load_file($arquivo);
	
	$nova_posicao = sizeof($xml->estados);
	
    $xml->estados[$nova_posicao]->sigla = $_POST["sigla"];
    $xml->estados[$nova_posicao]->nome = $_POST["nome"];


	$xml->asXML($arquivo);

	include("informacoes_lidas.php");
?>