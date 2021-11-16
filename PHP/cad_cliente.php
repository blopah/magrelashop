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
		include ('header.php');
	?>
	
      
        <!--cadastro start-->



        <div class="main-block">
            <form method="POST" action="CadCli.php">
                <h1>Cadastre-se</h1>
                <fieldset>
                    <legend>
                        <h3>Credenciais da conta</h3>
                    </legend>
                    <div class="account-details">
                        <div><label>E-mail*</label><input type="email" name="email" required></div>
                        <div><label>Repita o e-mail*</label><input type="email" name="email" required></div>
                        <div><label>Senha*</label><input type="password" name="senha" required></div>
                        <div><label>Repita a senha*</label><input type="password" name="senha" required></div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>
                        <h3>Informações pessoais</h3>
                    </legend>
                    <div class="personal-details">
                        <div>
                            <div><label>Nome*</label><input type="text" name="name" required></div>
                            <div><label>Telefone*</label><input type="tel" name="Telefone" required></div>
                            <div><label>CPF/CNPJ*</label><input type="text" name="CPF" required></div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>
                        <h3>Dados de entrega</h3>
                    </legend>
                    <div class="personal-details">
                        <div>
                            <div><label>CEP*</label><input type="number" name="CEP" required></div>
                            <div><label>Numero*</label><input type="number" name="Numero" required></div>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>




        <!--cadastro end-->

        
        
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