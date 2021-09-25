<?php

	// Conecta com o banco de dados:
	$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");

	$tablasBD = mysqli_query($mysqli, "show tables from bicicletaria_magrelas");

	$URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	$URL_FILTRADA = strstr($URL_ATUAL, '?', true);
	
	if ($URL_FILTRADA <> '') {
		$tabela = $_GET['tabela'];
		
		// Seleciona todos os registros da tabela:
		$result = mysqli_query($mysqli, "SELECT * FROM $tabela");

		// Retorna todos os registros:
		$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

		// Escreve o resultado JSON em arquivo:
		file_put_contents("$tabela.json", json_encode($data));
	}

	echo nl2br("==== Tabelas do Sistema ====\n\n");
	while (list($nomeTabela) = mysqli_fetch_array($tablasBD)){
		echo nl2br (' <a href="' .$URL_FILTRADA. '?tabela=' .$nomeTabela. '">' .$nomeTabela. ' </a> ');
		echo nl2br("\n");
	}
	
	
?>
