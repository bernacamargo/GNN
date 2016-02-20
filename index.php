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




				if ($(document).scrollTop() > $('#cabecalho').height()/2) {
					// Inicial -> Final
					/*$(".cabecalho").animate({height: '13%'},300);
					$(".cabecalho").css("position", "fixed");
					$("#menu").animate({bottom: 'auto'},300);*/
					/*$("#cabecalho > h1, #cabecalho > h1 > small").css("position","relative");
					$("#cabecalho").switchClass('cabecalho-inicial', 'cabecalho-final', 200);
					$("#menu").switchClass('navbar-menu-inicial', 'navbar-menu-final', 200);
					$("#index").css("margin-top", "300px");*/
				} else {
					// Final -> Inicial
					/*$(".cabecalho").css("position", "relative");
					$(".cabecalho").animate({height: '400px',position: 'relative'}, 300);
					$("#menu").animate({bottom: '-300px'},300);*/
					/*$("#cabecalho").switchClass('cabecalho-final', 'cabecalho-inicial', 0);
					$("#menu").switchClass('navbar-menu-final', 'navbar-menu-inicial', 0);
					$("#index").css("margin-top", "0");*/
				}
			});

			$(".imagem").height($('.thumbnail').height()/2));

		});
	</script>
</head>

<body>
<div class="container-fluid" id="corpo-full">

	<!-- CABEÇALHO -->
	<?php include "web/menu-index.php";?>

	<!-- CORPO -->
	<div style="top: 0;" class="container" id="index">

		<div align="center" class="alert alert-danger" role="alert"><strong>Website em Construção.</strong><br> Estamos trabalhando para que todo o conteúdo esteja disponível na nova versão do site o mais rápido possível. <br>Desculpe o transtorno.</div>

		<h2 style="text-align: left; font-weight: normal;">Notícias</h2>

		<li role="separator" class="separador"></li>
		<br><br>


		<!-- VERSAO 1
		<div class="container-fluid" align="center">
			<div class="row">

				<div class="col-md-3 box">
					<div style="  width: 200px; height: 200px; background-color: #999; border: 5px solid #d5d5d5;" class="imagem">

					</div>
					<div class="legenda">
						<h5>Legenda</h5>
					</div>
				</div>

				<div class="col-md-3">
					<div style="  width: 200px; height: 200px; background-color: #999; border: 5px solid #d5d5d5;" class="imagem box">

					</div>					<h5>Legenda</h5>
				</div>

				<div class="col-md-3 box">
					<div style="  width: 200px; height: 200px; background-color: #999; border: 5px solid #d5d5d5;" class="imagem">

					</div>					<h5>Legenda</h5>
				</div>

				<div class="col-md-3 box">
					<div style="  width: 200px; height: 200px; background-color: #999; border: 5px solid #d5d5d5;" class="imagem">

					</div>					<h5>Legenda</h5>
				</div>
			</div>
		</div>
		-->

		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div align="center" class="item active">
						<img src="web/imagens/slider.png" alt="">
						<div class="carousel-caption">
							Imagem 1
						</div>
					</div>
					<div align="center" class="item">
						<img src="web/imagens/slider.png" alt="">
						<div class="carousel-caption">
							Imagem 2
						</div>
					</div>
					<div align="center" class="item">
						<img src="web/imagens/slider.png" alt="">
						<div class="carousel-caption">
							Imagem 3
						</div>
					</div>
					...
				</div>

				<!-- Controls -->
				<a style="background-color: transparent" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span style="color: #999" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span style="color: #999" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<br><br><br><br>

		<h2 style="text-align: left; font-weight: normal;">Destaques do Grupo</h2>

		<li role="separator" class="separador"></li>
		<br><br>



		<div class="row">
			<div align="center" class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="imagem" style="  width: 242px; height: 200px; background-color: #999; border: 5px solid #d5d5d5;"><h3 style="text-align: center; color: #333; position:relative; top: 50%; margin-top: -10%;"><strong>242x200</strong></h3></div>
					<!--	<img src="..." alt="..."> -->
					<div class="caption">
						<h3> Nome</h3>
						<p>Legenda</p>
						<p><a href="#" style="background-color: <?php echo $template_theme; ?>" class="btn btn-primary" role="button">Lattes</a></p>
					</div>
				</div>
			</div>
			<div align="center" class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="imagem" style="  width: 242px; height: 200px; background-color: #999; border: 5px solid #d5d5d5;"><h3 style="text-align: center; color: #333; position:relative; top: 50%; margin-top: -10%;"><strong>242x200</strong></h3></div>
					<!--	<img src="..." alt="..."> -->
					<div class="caption">
						<h3> Nome</h3>
						<p>Legenda</p>
						<p><a href="#" style="background-color: <?php echo $template_theme; ?>" class="btn btn-primary" role="button">Lattes</a></p>
					</div>
				</div>
			</div>
			<div align="center" class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="imagem" style="  width: 242px; height: 200px; background-color: #999; border: 5px solid #d5d5d5;"><h3 style="text-align: center; color: #333; position:relative; top: 50%; margin-top: -10%;"><strong>242x200</strong></h3></div>
					<!--	<img src="..." alt="..."> -->
					<div class="caption">
						<h3> Nome</h3>
						<p>Legenda</p>
						<p><a href="#" style="background-color: <?php echo $template_theme; ?>" class="btn btn-primary" role="button">Lattes</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- FOOTER -->
	<?php include 'web/footer.php';?>

</div>
</body>
</html>