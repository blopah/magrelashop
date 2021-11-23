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
		include ('headerGerLogado.php');
	?>
	
    
    <nav class="menu home_funcs">
        <ul class="lista_menu">
            <li class="item_menu" style="background-color: gray;">
                <a href="#">
                    Cadastro de Produtos
                </a>
            </li>
            <li class="item_menu" style="background-color: gray;">
                <a href="#">
                    Cadastro de Funcionários
                </a>
            </li>
            <li class="item_menu" style="background-color: gray;">
                <a href="#">
                    RH
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