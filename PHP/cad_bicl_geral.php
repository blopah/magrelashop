<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magrela Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
	
	<?php
		include ('headerLogado.php');
	?>
	
     <!--cadastro start-->



        <div class="main-block">
            <form method="POST" action="../PHP/CadBike.php">
                <h1>Cadastrar bicicletas</h1>
                <fieldset>
                    <legend>
                        <h3>Dados do produto</h3>
                    </legend>
                    <div class="account-details">
                        <div><label>descrição</label><input type="descricao" name="desc_prod" required></div>
                        <div><label>preço</label><input type="text" name="preco_prod" required></div>
                        <div>
                            <label>categoria</label><select id=categoria name=categoria required>
                                <option value="" selected="selected">Selecione a categoria</option>
                                <option value="VERONA">VERONA</option>
                                <option value="MONTAIN BIKE">MONTAIN BIKE</option>
                                <option value="RETRO">RETRO</option>
                                <option value="BMX">BMX</option>
                                <option value="E-BIKE">E-BIKE</option>
                            </select>
                        </div>
                        <div><label>Quantidade</label><input type="number" name="qtd" min="1" required value="1"></div>
                    </div>
                </fieldset>
                <button type="submit" href="/">Cadastrar</button>
            </form>
                <div><a href="../PHP/ListaBikes.php" class="btn btn-success" role="button">Bikes Cadastradas</a></div>
        </div>

        <footer class="rodape">
            <div class="descricao-footer">
                <h1>Qualquer erro entre em contato com o email SuporteT.I@yahoo.com.br</h1>
            </div>

        </footer>
    </main>
</body>

</html>