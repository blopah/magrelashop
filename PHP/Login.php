<?php

	session_start();
	$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
	
	$email = $_POST['email'];
	$senha = MD5($_POST['senha']);
	$senha2 = $_POST['senha'];
	
	$result = mysqli_query($mysqli, "SELECT `nome`, `funcao`, `situacao`, `senha` FROM `enderecos_funcionario` WHERE `email` = '$email'") 
	or die(mysqli_error($mysqli));

	$acesso = mysqli_fetch_array($result);
	

	if ($acesso['senha'] <> $senha) {
		echo "<script language='javascript' type='text/javascript'>
				alert('Usuário ou senha incorretos!');</script>";
	}else{
		if($acesso['situacao'] <> 'Ativo'){
			echo "<script language='javascript' type='text/javascript'>
					alert('O usuário está: " . $acesso['situacao'] . "  ');</script>";
		}else{
			$_SESSION['VendedorLogado'] = true;
			echo "<script language='javascript' type='text/javascript'>
					alert('" . $acesso['funcao'] . " logado com sucesso!!!');window.location.href='../funcionarios/homeVen.html'</script>";
		}
	}


?>
