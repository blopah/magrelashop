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
	
	<?php
		include ('headerLogado.php');
	?>
	
    <div class="main-block">
        <form action="/">
            <h1>Controle de estoque </h1>
            <fieldset>
                <legend>
                    <h3>Listagem de produto</h3>
                </legend>
                <div class="account-details">
                    <div><label>digitar nome do produto</label><input type="text" name="prod" required></div>
                    <div><label>digitar ID do produto</label><input type="id" name="prodId" required></div>
                </div>
            </fieldset>
            <button type="submit" href="/">Buscar</button>
        </form>
					
    </div>
	
	
    <div class="main-block">
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>ID Produto</th>
							<th>Descricao</th>
							<th>Preco</th>
							<th>Categoria</th>
							<th>Quantidade</th>
							<th class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
					$result = mysqli_query($mysqli, "SELECT * FROM `produto` ORDER BY `id_produto` DESC limit 1");
					$limite = mysqli_fetch_array($result);
					
					for ($i = 1; $i <= $limite['id_produto']; $i++) {
						
						$result = mysqli_query($mysqli, "SELECT * FROM `produto` WHERE `id_produto` = " . $i);
						$bike = mysqli_fetch_array($result);
						
						if($bike){
							echo "<tr>
								<td> " . $bike['id_produto'] . " </td>
								<td> " . $bike['descricao'] . " </td>
								<td> " . $bike['preco'] . " </td>
								<td> " . $bike['categoria'] . " </td>
								<td> " . $bike['quantidade'] . " </td>
								<td class='actions'>
									<a class='btn btn-warning btn-xs' href='editCadBike.php?" . $bike['id_produto'] ."'>Editar</a>
									<a class='btn btn-danger btn-xs'  href='Confirmacao.php?" . $bike['id_produto'] ."' data-toggle='modal' data-target='#delete-modal'>Excluir</a>
								</td>
							</tr>";
						}
					}
					?>
					</tbody>
				</table>
			</div>		
    </div>
		<br>
		
        <?php 
            include('footer.php')
        ?>

    </main>
</body>

</html>