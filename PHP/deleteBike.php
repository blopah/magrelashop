<?php

	$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
	
	$result = mysqli_query($mysqli, "SELECT `id_fornecedor`, `id_produto` FROM `produto` ORDER BY `id_produto` DESC limit 1");
	
	$cliente = mysqli_fetch_array($result);
	
	$URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$id = substr($URL_FILTRADA = strstr($URL_ATUAL, '?', false), 1);
	
	$query = "DELETE FROM `produto` WHERE `produto`.`id_produto` = '$id';";
									
	$delete = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	
	if($delete){
		echo "<script language='javascript' type='text/javascript'>alert('Produto deletado com sucesso! ');window.location.href='ListaBikes.php'</script>";
		
	}else{
		echo "<script language='javascript' type='text/javascript'>alert('ERRO!!!!! Verifique o erro na tela! ');window.location.href='ListaBikes.php'</script>";
		
	}
	
?>