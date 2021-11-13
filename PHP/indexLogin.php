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
		include ('header.php');
	?>
	
       
    <div class="main-block">
        <form method="POST" action="Login.php">
            <h1>Página de Login</h1>
            <fieldset>
                <legend>
                    <h3>Dados do Funcionario</h3>
                </legend>
                <div class="account-details">
                    <div><label>Email*</label><input type="email" name="email" required></div>
                    <div><label>Password*</label><input type="password" name="senha" required></div>
                </div>

            </fieldset>
            <button type="submit" href="/">Submit</button>
        </form>
    </div>

    <footer class="rodape">
        <div class="descricao-footer">
            <h1>Qualquer erro entre em contato com o email SuporteT.I@yahoo.com.br</h1>
        </div>

    </footer>
    </main>
</body>

</html>