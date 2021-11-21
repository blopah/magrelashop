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
	
        <!-- PRODUTO INICIO -->
		
		<?php
			include ('header.php');
			
			$URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$id = substr($URL_FILTRADA = strstr($URL_ATUAL, '?', false), 1);
			
			$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
			$result = mysqli_query($mysqli, "SELECT * FROM `produto` WHERE `id_produto` = " . $id);
			$bike = mysqli_fetch_array($result);

			echo "<div class='produto'>
				<div class='imagem_produto'>
					<img src='../img/catalogo/bike1.jpg' alt=''>
				</div>
				<div class='info_produto'>
					<div class='titulo_produto'>" . $bike['descricao'] . "</div>
					<div class='quantidade'>
						<div class='quantidade'> Quantidade em estoque: " . $bike['quantidade'] . "</div>
					</div>
					<div class='preco_produto'>
						<div class='valor_produto'>R$ " . $bike['preco'] . "</div>
					</div>
					<a href='#'>
						<div class='comprar_produto'>
							<div class='super_oferta_produto'>Comprar</div>
						</div>
					</a>
				</div>
			</div>"

		?>
        <!-- PRODUTO FIM -->



        <?php 
            include('footer.php')
        ?>



        <script type="text/javascript">
            var counter = 1;
            setInterval(function () {
                document.getElementById("radio" + counter).checked = true;
                counter++;
                if (counter > 4) {
                    counter = 1;
                }
            }, 5000)
        </script>
        <!--image slider end-->
    </main>
</body>

</html>