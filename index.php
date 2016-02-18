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
				if ($(document).scrollTop() > 150) {
					$("#cabecalho").switchClass('cabecalho-inicial', 'cabecalho-final', 50);
					$("#menu").switchClass('navbar-menu-inicial', 'navbar-menu-final', 50);
					$("#corpo").css("top", "250px");
				} else {
					$("#cabecalho").switchClass('cabecalho-final', 'cabecalho-inicial', 0);
					$("#menu").switchClass('navbar-menu-final', 'navbar-menu-inicial', 0);
					$("#corpo").css("top", "0");
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
	<div style="height: 1000px;" class="container" id="corpo">

	</div>

	<!-- FOOTER -->
	<div class="container-fluid" id="footer">
		<footer>

		</footer>
	</div>
</div>
</body>
</html>