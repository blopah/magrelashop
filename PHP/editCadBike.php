<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magrela Shop</title>
    <link rel="stylesheet" href="../style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
	
	<?php
		include ('headerLogado.php');
	?>
	
    <!--cadastro start-->

		<?php 
			$URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			
			$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
			$id = substr($URL_FILTRADA = strstr($URL_ATUAL, '?', false), 1);
			$result = mysqli_query($mysqli, "SELECT * FROM `produto` WHERE `id_produto` = " . $id);
			$dados = mysqli_fetch_array($result);
		?>
        <div class="main-block">
            <form method="POST" action="../PHP/editBike.php">
                <h1>Editar bicicletas</h1>
                <fieldset>
                    <legend>
                        <h3>Dados do produto</h3>
                    </legend>
                    <div class="account-details">
						<div style="display: none;"><label>id</label><input type="id" name="id_prod" value="<?php echo $dados['id_produto'] ?>" required></div>
                        <div><label>descrição</label><input type="descricao" name="desc_prod" value="<?php echo $dados['descricao'] ?>" required></div>
                        <div><label>preço</label><input type="text" name="preco_prod" value="<?php echo $dados['preco'] ?>" required></div>
                        <div>
                            <label>categoria</label><select id=categoria name=categoria required>
                                <option value="<?php echo $dados['categoria'] ?>" selected="selected"><?php echo $dados['categoria'] ?></option>
                                <option value="VERONA">VERONA</option>
                                <option value="MONTAIN BIKE">MONTAIN BIKE</option>
                                <option value="RETRO">RETRO</option>
                                <option value="BMX">BMX</option>
                                <option value="E-BIKE">E-BIKE</option>
                            </select>
                        </div>
                        <div><label>Quantidade</label><input type="number" name="qtd" min="1" value="<?php echo $dados['quantidade'] ?>" readonly style="background-color: Lightgray;"></div>
                    </div>
                </fieldset>
                <button type="submit" href="/">Atualizar</button>
                <a type="submit" href="ListaBikes.php" class="btn btn-warning voltarr">Voltar</a>
            </form>
        </div>
		<br>
		
        <?php 
            include('footer.php')
        ?>

        </footer>
    </main>
</body>

</html>