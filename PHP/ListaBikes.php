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
        <header class="cabecalho">
            <div class="logo">
                <a href="../index.html">
                    <img src="../img/logo.png" alt="">

                </a>
            </div>
            <div class="busca">
                <input type="text" placeholder="Digite o que você procura">
            </div>
            <div class="opcoes">
                <div class="login">
                    <a href="../cad_cliente.html">
                        <div class="img_opcoes">
                            <img src="../img/perfil.png" alt="">
                        </div>
                        <div class="txt_opcoes">Entre ou se <br>cadastre</div>
                    </a>
                </div>
                <div class="suporte">
                    <a href="#">
                        <div class="img_opcoes">
                            <img src="../img/suporte.png" alt="">
                        </div>
                        <div class="txt_opcoes">Central de <br>suporte</div>

                    </a>
                </div>
                <div class="carrinho">
                    <a href="#">
                        <div class="img_opcoes">
                            <img src="../img/carrinho.png" alt="">
                        </div>
                        <div class="txt_opcoes txt_carrinho">Carrinho<span id="valor_carrinho">R$ 0,00</span></div>
                    </a>
                </div>
            </div>
        </header>
        
		
		
		<!-- INICIO LISTA -->
		<div class="main-block">
			<div id="list" class="row">
					
				<div class="table-responsive col-md-12">
					<table class="table table-striped" cellspacing="0" cellpadding="0">
						<thead>
							<tr>
								<th>ID Fornecedor</th>
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
							
								echo "<tr>
									<td> " . $bike['id_fornecedor'] . " </td>
									<td> " . $bike['id_produto'] . " </td>
									<td> " . $bike['descricao'] . " </td>
									<td> " . $bike['preco'] . " </td>
									<td> " . $bike['categoria'] . " </td>
									<td> " . $bike['quantidade'] . " </td>
									<td class='actions'>
										<a class='btn btn-warning btn-xs' href='edit.html'>Editar</a>
										<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Excluir</a>
									</td>
								</tr>";
							}
						?>
						</tbody>
					</table>
				</div>
					
			</div> <!-- /#list -->
        </div>
		
        <footer class="rodape">
            <div class="descricao-footer">
                <h1>Qualquer erro entre em contato com o email SuporteT.I@yahoo.com.br</h1>
            </div>

        </footer>
    </main>
</body>

</html>