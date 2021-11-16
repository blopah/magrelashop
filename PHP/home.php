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
	
        <!--image slider start-->
        <section class="slide-show">
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="../img/slide/img1.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/slide/img2.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/slide/img3.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="../img/slide/img4.webp" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="auto-nav">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!--automatic navigation end-->
                    <!--manual navigation start-->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                    <!--manual navigation end-->
                </div>
            </div>
        </section>
        <section class="catalogo">
		
			<?php 
			$mysqli = mysqli_connect("localhost", "root", "", "bicicletaria_magrelas");
			$result = mysqli_query($mysqli, "SELECT * FROM `produto` ORDER BY `id_produto` DESC limit 1");
			$limite = mysqli_fetch_array($result);
			
			for ($j = 1; $j <= 1; $j++) {
				for ($i = 1; $i <= $limite['id_produto']; $i++) {
								
					$result = mysqli_query($mysqli, "SELECT * FROM `produto` WHERE `id_produto` = " . $i);
					$bike = mysqli_fetch_array($result);
					
					if($bike){
						echo	"<div class='produto'>
								<a href='produto.php?" . $bike['id_produto'] ."'>
									<div class='imagem_catalogo'>
										<img src='../img/catalogo/bike1.jpg' alt=''>
									</div>
									<div class='info_catalogo'>
										<div class='titulo_catalogo'>" . $bike['descricao'] . "</div>
										<div class='quantidade'>
											<div class='quantidade'>" . $bike['quantidade'] . "</div>
										</div>
										<div class='preco_catalogo'>
											<div class='valor_catalogo'>R$ " . $bike['preco'] . "</div>
										</div>
									</div>
								</a>
						</div>";
						
					}
					
				}
			}
			?>
			
			
        </section>
        
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