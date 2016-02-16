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
	<script type="text/javascript" src="web/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="web/bootstrap-3.3.6-dist/js/bootstrap-dropdown-hover.js"></script>
	<script type="text/javascript" src="web/func.js"></script>
</head>

<body>
<div class="container-fluid" id="corpo-full">

	<!-- CABEÇALHO -->

	<div class="container-fluid" id="cabecalho">
		<h1>Projeto NanoNeuroBioFísica</h1>
	</div>


	<nav style="border-radius: 0;" class="navbar navbar-menu">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Publicações</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Grupo de Pesquisa <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Alunos</a></li>
							<li><a href="#">Colaboradores</a></li>
							<li><a href="#">Ex-Alunos</a></li>
							<li><a href="#">Pesquisadores</a></li>
							<li><a href="#">Laboratórios</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#"class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apoio <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Colaboradores</a></li>
							<li><a href="#">Patentes</a></li>
							<li><a href="#">Patrocinadores</a></li>
						</ul>
					</li>
					<li><a href="#">Projetos em Desenvolvimento</a></li>
					<li><a href="#">Oportunidades</a></li>
					<li><a href="#">Sobre</a></li>


				</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<!-- CORPO -->
	<div style="height: 700px;" class="container" id="corpo">

	</div>

	<!-- FOOTER -->
	<div class="container-fluid" id="footer">
		<footer>

		</footer>
	</div>
</div>
</body>
</html>