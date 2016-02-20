<?php
$DESCRIÇAO = 'DOWNLOADS';
$menu = 'downloads';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>NanoNeuroBioPhysics</title>

	<!-- ===== Stylesheet ===== -->
	<link rel="stylesheet" href="../web/bootstrap-3.3.6-dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="../web/estilo-menu.css"/>
	<link rel="stylesheet" href="../web/estilo.css"/>

	<!-- ===== JavaScript ===== -->
	<script type="text/javascript" src="../web/bootstrap-3.3.6-dist/js/jquery-2.2.0.js"></script>
	<script type="text/javascript" src="../web/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../web/bootstrap-3.3.6-dist/js/bootstrap-dropdown-hover.js"></script>
	<script type="text/javascript" src="../web/bootstrap-3.3.6-dist/startbootstrap-scrolling-nav-gh-pages/js/scrolling-nav.js"></script>
	<script type="text/javascript" src="../web/func.js"></script>
	<script type="text/javascript">
		offsetValue = 40;
		$('#publicacoes').data().scrollspy.options.offset = offsetValue;
		// force scrollspy to recalculate the offsets to your targets
		$('#publicacoes').data().scrollspy.process();
	</script>
</head>

<body>
<div class="container-fluid" id="corpo-full">

	<?php include
	"../web/menu.php";
	?>


	<!-- CORPO -->
	<div style="top: 150px;" class="container" id="corpo">

		<div id="post-101" class="post-101 page type-page status-publish hentry">

		<li class="article-header">
			<h1 class="titulo">Downloads</h1>
		</li><br><br>

			<div class="entry-content">
				<p><strong>Modelo de Carta de Recomendação</strong> &#8211; <a href="http://www.nanoneurobiophysics.net/wp-content/uploads/2012/07/formulario_carta_recomendacao.doc" target="_blank">Clique aqui</a></p>
			</div>

		</div>

	</div>


	<!-- FOOTER -->
	<?php include '../web/footer.php';?>


</div>
</body>
</html>