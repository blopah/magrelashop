<?php

	$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
	
	$result = mysqli_query($mysqli, "SELECT `id_fornecedor`, `id_produto` FROM `produto` ORDER BY `id_produto` DESC limit 1");
	
	$cliente = mysqli_fetch_array($result);
	
	$ID_Prod = $cliente['id_produto'] + 1;
	$ID_Forn = rand(1, 3);
	
	$id = $_POST['id_prod'];
	$descricao = $_POST['desc_prod'];
	$preco = $_POST['preco_prod'];
	$categoria = $_POST['categoria'];
	$Quantidade = $_POST['qtd'];
	
	$query = "UPDATE `produto` SET  
									`descricao` = '$descricao',  
									`preco` = '$preco',  
									`categoria` = '$categoria',  
									`quantidade` = '$Quantidade'  
								WHERE  
									`produto`.`id_produto` = '$id';";
									
	$insert = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	
	if($insert){
		echo "<script language='javascript' type='text/javascript'>alert('Produto atualizado com sucesso! ');window.location.href='ListaBikes.php'</script>";
		
	}else{
		//echo ("Errormessage: %s\n", $insert->error);
		echo "<script language='javascript' type='text/javascript'>alert('ERRO!!!!! Verifique o erro na tela! ');window.location.href='../funcionarios/cad_bicl_geral.html'</script>";
		
	}
	
?>