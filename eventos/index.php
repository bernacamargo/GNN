<?php
$DESCRIÇAO = 'EVENTOS';
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

		<div id="post-98" class="post-98 page type-page status-publish hentry">

			<li class="article-header"><h1 class="titulo">Eventos</h1></li><br><br>

			<div class="entry-content">
				<p><strong style="font-size: 18px; text-align: center;">I Curso de Imunologia para Futuros Cientistas</strong></p>
				<ul>
					<li>Dias 23/9/2015 e 3/10/2015.</li>
					<li>Mais informações na <a href="https://www.facebook.com/cursoimunologia2015?fref=ts" target="_blank">página</a> e no <a href="https://www.facebook.com/events/866202733463928/" target="_blank">evento</a> no Facebook.</li>
					<li>Você também pode <a href="http://www.nanoneurobiophysics.net/wp-content/uploads/2015/08/Curso_imunologia_UFSCar-Unicamp.pdf">baixar o cartaz</a> e nos ajudar a divulgar. Somos gratos.</li>
				</ul>
			</div>

		</div>
	</div>


	<!-- FOOTER -->
	<?php include '../web/footer.php';?>


</div>
</body>
</html>