<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magrela Shop</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
	
		<?php
			include ('headerGerLogado.php');
		?>
	
        <div class="main-block">
            <form action="/">
                <h1>Cadastro de funcionario</h1>
                <fieldset>
                    <legend>
                        <h3>Dados do funcionario</h3>
                    </legend>
                    <div class="account-details">
                        <div><label>Nome completo</label><input type="descricao" name="desc_prod" required></div>
                        <div><label>Função</label><input type="descricao" name="desc_prod" required></div>
                        <div><label>Salario</label><input type="descricao" name="desc_prod" required></div>
                        <div><label>Cidade</label><input type="descricao" name="desc_prod" required></div>
                        <div><label>Logradouro</label><input type="preco" name="preco_prod" required></div>
                        <div><label>UF</label><input type="descricao" name="desc_prod" required></div>
                        <div><label>cep</label><input type="categ" name="categ_prod" required></div>
                        <div><label>telefone</label><input type="qtd" name="qtd_prdo" required></div>
                        <div><label>e-mail</label><input type="qtd" name="qtd_prdo" required></div>
                        <div><label>CPF</label><input type="descricao" name="desc_prod" required></div>
                        <div><label>Senha provisoria</label><input type="descricao" name="desc_prod" required></div>
                    </div>
                </fieldset>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
		<br>
		
        <?php 
            include('footer.php')
        ?>
		
    </main>
</body>

</html>