<?php
$DESCRIÇAO = 'PAGINA INICIAL';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>NanoNeuroBioPhysics</title>

	<!-- ===== Stylesheet ===== -->
	<link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="web/estilo-menu.css"/>
	<link rel="stylesheet" href="web/estilo.css"/>

	<!-- ===== JavaScript ===== -->
	<script type="text/javascript" src="web/bootstrap-3.3.6-dist/js/jquery-2.2.0.js"></script>
	<script type="text/javascript" src="web/bootstrap-3.3.6-dist/js/jquery-ui.js"></script>
	<script type="text/javascript" src="web/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="web/bootstrap-3.3.6-dist/js/bootstrap-dropdown-hover.js"></script>
	<script type="text/javascript" src="web/func.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){


			//FUNCAO SCROLL TOP
			$(window).scroll(function () {


				if ($(document).scrollTop() > 250) {


				}




				if ($(document).scrollTop() > 150) {
					// Inicial -> Final
					$("#cabecalho > h1, #cabecalho > h1 > small").css("position","relative");
					$("#cabecalho").switchClass('cabecalho-inicial', 'cabecalho-final', 50);
					$("#menu").switchClass('navbar-menu-inicial', 'navbar-menu-final', 50);
					$("#index").css("margin-top", "300px");
				} else {
					// Final -> Inicial
					$("#cabecalho").switchClass('cabecalho-final', 'cabecalho-inicial', 0);
					$("#menu").switchClass('navbar-menu-final', 'navbar-menu-inicial', 0);
					$("#index").css("margin-top", "0");
				}
			});


		});
	</script>
</head>

<body>
<div class="container-fluid" id="corpo-full">

	<!-- CABEÇALHO -->
	<?php include "web/menu-index.php";?>

	<!-- CORPO -->
	<div style="top: 0;" class="container" id="index">
		<h1 style="text-align: center;">Destaques do Grupo</h1><br><br>
		<div class="container-fluid" align="center">
			<div class="row">

				<div class="col-md-3">
					<div style="width: 200px; height: 200px; background-color: #999; border: 10px solid #333;" class="imagem">

					</div>
					<div class="legenda">
						<h5>Legenda</h5>
					</div>
				</div>

				<div class="col-md-3">
					<div style="width: 200px; height: 200px; background-color: #999; border: 10px solid #333;" class="imagem">

					</div>					<h5>Legenda</h5>
				</div>

				<div class="col-md-3">
					<div style="width: 200px; height: 200px; background-color: #999; border: 10px solid #333;" class="imagem">

					</div>					<h5>Legenda</h5>
				</div>

				<div class="col-md-3">
					<div style="width: 200px; height: 200px; background-color: #999; border: 10px solid #333;" class="imagem">

					</div>					<h5>Legenda</h5>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<?php include 'web/footer.php';?>

</div>
</body>
</html>