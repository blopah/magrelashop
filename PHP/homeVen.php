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
	
	<?php
		include ('headerLogado.php');
	?>
	
    <nav class="menu home_funcs">
        <ul class="lista_menu">
            <li class="item_menu" >
                <a href="cad_bicl_geral.php">
                    Cadastro Geral de Bicicletas  
                </a>
            </li>
            <li class="item_menu" style="background-color: gray;">
                <a href="#">
                    Controle de Caixa 
                </a>
            </li>
            <li class="item_menu">
                <a href="controle_estoque.php">
                    Controle de Estoque 
                </a>
            </li>
            <li class="item_menu" style="background-color: gray;">
                <a href="#">
                    Folha de Ponto  
                </a>
            </li>
        </ul>
    </nav>
		<br>
		
        <?php 
            include('footer.php')
        ?>

    </main>
</body>

</html>