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
				alert('Usuário ou senha incorretos!');window.location.href='indexLogin.php'</script>";
	}else{
		if($acesso['situacao'] <> 'Ativo'){
			echo "<script language='javascript' type='text/javascript'>
					alert('O usuário está: " . $acesso['situacao'] . "  ');window.location.href='indexLogin.php'</script>";
		}else{
			if($acesso['funcao'] == 'Vendedor'){
				$_SESSION['VendedorLogado'] = true;
				
				
				echo '<script>';
				echo 'console.log('.  session_status() .')';
				echo '</script>';	

				
				echo "<script language='javascript' type='text/javascript'>
						alert('" . $acesso['funcao'] . " logado com sucesso!!!');window.location.href='homeVen.php'</script>";
				
			}else{
				if($acesso['funcao'] == 'Gerente'){
					$_SESSION['GerenteLogado'] = true;
					echo "<script language='javascript' type='text/javascript'>
							alert('" . $acesso['funcao'] . " logado com sucesso!!!');window.location.href='homeGer.php'</script>";
					
				}
			}
		}
	}


			echo '<script>';
			echo 'console.log('. session_status() .')';
			echo '</script>';	
?>