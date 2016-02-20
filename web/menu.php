<!-- ================================================== -->
<!-- =============== MENU GNN/DIRETORIO =============== -->
<!-- ================================================== -->


<?php include '../web/sistema.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
</head>
<body>
<!-- CABEÇALHO -->
<div id="cabecalho" class="cabecalho-final">

	<h1 style="text-transform: uppercase;">Grupo de Pesquisa NanoNeuroBioFísica</h1>


	<nav style="border-radius: 0; <?php echo $template_theme; ?>" id="menu" class="navbar navbar-menu-final" role="navigation">

		<div align="center" class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../GNN"><span class="glyphicon glyphicon-home"></span></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../publicacoes">Publicações</a></li>
					<li><a href="../projetos_em_desenvolvimento">Projetos em Desenvolvimento</a></li>
					<li><a href="../linhas-de-pesquisa">Linhas de Pesquisa</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-hover="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Equipe <span class="caret"></span></a>
						<ul style="<?php echo $template_theme; ?>" class="dropdown-menu">
							<li><a href="../equipe/alunos">Alunos</a></li>
							<li><a href="../equipe/ex-alunos">Ex-Alunos</a></li>
							<li><a href="../equipe/pesquisadores">Pesquisadores</a></li>
							<li><a href="../equipe/laboratorios">Laboratórios</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apoio <span class="caret"></span></a>
						<ul style="<?php echo $template_theme; ?>" class="dropdown-menu">
							<li><a href="../apoio/colaboradores">Colaboradores</a></li>
							<li role="presentation" class="disabled"><a href="">Patentes</a></li>
							<li role="presentation" class="disabled"><a href="">Patrocinadores</a></li>
						</ul>
					</li>
					<li><a href="../sobre">Sobre</a></li>
					<li><a href="../eventos">Eventos</a></li>
					<li><a href="../downloads">Downloads</a></li>
					<li><a href="../contato">Contato</a></li>



				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div> <!-- /.cabecalho -->
</body>
</html>