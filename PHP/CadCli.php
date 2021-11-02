<?php

	$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
	
	$result = mysqli_query($mysqli, "SELECT `id_cliente`, `nome_cliente` FROM `clientes` ORDER BY `id_cliente` DESC limit 1");
	
	$cliente = mysqli_fetch_array($result);
	
	$ID = $cliente['id_cliente'] + 1;

	$login = $_POST['email'];
	$senha = MD5($_POST['senha']);
	$name = $_POST['name'];
	$Telefone = $_POST['Telefone'];
	$CPF = $_POST['CPF'];
	$CEP = $_POST['CEP'];
	$Numero = $_POST['Numero'];
	
	$query = "INSERT INTO clientes VALUES ('$ID', '$name', '$Telefone', '$CPF', '$CEP', '$Numero', '$login', '$senha')";
	$insert = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	
	if($insert){
		echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso! ');window.location.href='../'</script>";
		
	}else{
		//echo ("Errormessage: %s\n", $insert->error);
		echo "<script language='javascript' type='text/javascript'>alert('ERRO!!!!! Verifique o erro na tela! ');</script>";
		
	}
	
	echo "<script language='javascript' type='text/javascript'>alert('Usuário: " . $login . " senha: " . $senha . " name: " . $name . " Telefone: " . $Telefone . " CPF: " . $CPF . " CEP: " . $CEP . " Numero: " . $Numero . " Último: " . $cliente['nome_cliente'] . " ID: " . $ID . " ');</script>";
?>
