
<header class="cabecalho">
	<div class="logo">
		<a href="home.php">
			<img src="../img/logo.png" alt="">

		</a>
	</div>
	<div class="busca">

	</div>
	<div class="opcoes">
		<div class="login">
			<a href="cad_cliente.php">
				<div class="img_opcoes">
					<img src="../img/perfil.png" alt="">
				</div>
				<div class="txt_opcoes">Cadastre-se</div>
			</a>
		</div>
		
		<div class="suporte">
			<a href="indexLogin.php">
				<div class="img_opcoes">
					<img src="../img/funcs.png" alt="">
				</div>
				<div class="txt_opcoes">Página de<br>funcionários</div>

			</a>
		</div>
		
		<?php 
			echo '<script>';
			echo 'console.log('. session_status() .')';
			echo '</script>';

			echo '<script>';
			echo 'console.log('. $_SESSION['VendedorLogado'] == true .')';
			echo '</script>';	

			echo '<script>';
			echo 'console.log('. session_status() .')';
			echo '</script>';			
		?>
		
		<?php if (session_status() == 2)
			
			echo '<div class="sair">
					<a href="sair.php">
						<div class="img_opcoes">
							<img src="../img/funcs.png" alt="">
						</div>
						<div class="txt_opcoes">Sair</div>

					</a>
				</div>'
			
		?>
		
		<div class="carrinho">
			<a href="Carrinho.php">
				<div class="img_opcoes">
					<img src="../img/carrinho.png" alt="">
				</div>
				<div class="txt_opcoes txt_carrinho">Carrinho<span id="valor_carrinho">R$ 0,00</span></div>
			</a>
		</div>
	</div>
</header>