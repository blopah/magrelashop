<?php

	$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
	
	$email = $_POST['email'];
	$senha = MD5($_POST['senha']);
	$senha2 = $_POST['senha'];
	
	$result = mysqli_query($mysqli, "SELECT `nome`, `funcao`, `situacao`, `senha` FROM `enderecos_funcionario` WHERE `email` = '$email'") 
	or die(mysqli_error($mysqli));
	
	$acesso = mysqli_fetch_array($result);
	
	echo "<script language='javascript' type='text/javascript'>alert('Usuário: " . $email . " senha: " . $senha . " senha2: " . $senha2 . "  ');</script>";

?>
