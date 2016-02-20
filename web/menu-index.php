<!-- ================================================== -->
<!-- =============== MENU GNN/ ======================== -->
<!-- ================================================== -->

<?php include 'web/sistema.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
</head>
<body>
<div style="cursor: default;" id="cabecalho" class="cabecalho-inicial">

	<h1 style="text-transform: uppercase;">
		<strong>Grupo de Pesquisa NanoNeuroBioFísica</strong><br>
		<strong><small>"Uma nova fronteira do conhecimento"</small></strong>
	</h1>


	<nav style="border-radius: 0;<?php echo $template_theme; ?>" id="menu" class="navbar navbar-menu-inicial">

		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div  class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-toggle" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand hidden" href="../../GNN/">&nbsp;&nbsp;<span class="glyphicon glyphicon-home"></span></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div style="position:relative; left: 10%;" class="collapse navbar-collapse" id="menu-toggle">
				<ul class="nav navbar-nav">
					<li><a style="<?php if($menu == 'quem-somos') echo $menu_ativo?>" href="quem-somos">Quem somos</a></li>
					<li><a style="<?php if($menu == 'linhas-de-pesquisa') echo $menu_ativo?>" href="linhas-de-pesquisa">Linhas de Pesquisa</a></li>
					<li class="dropdown">
						<a style="<?php if($menu == 'projetos') echo $menu_ativo?>" href="" class="dropdown-toggle" data-hover="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Projetos <span class="caret"></span></a>
						<ul style="<?php echo $template_theme; ?>" class="dropdown-menu">
							<li><a href="projetos/desenvolvidos">Projetos desenvolvidos</a></li>
							<li><a href="projetos/em-desenvolvimento">Projetos em desenvolvimento</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a style="<?php if($menu == 'equipe') echo $menu_ativo?>" href="#" class="dropdown-toggle" data-hover="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Equipe <span class="caret"></span></a>
						<ul style="<?php echo $template_theme; ?>" class="dropdown-menu">
							<li><a href="equipe/alunos">Alunos</a></li>
							<li><a href="equipe/ex-alunos">Ex-Alunos</a></li>
							<li><a href="equipe/pesquisadores">Pesquisadores</a></li>
							<li><a href="equipe/laboratorios">Laboratórios</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a style="<?php if($menu == 'apoio') echo $menu_ativo?>" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apoio <span class="caret"></span></a>
						<ul style="<?php echo $template_theme; ?>" class="dropdown-menu">
							<li><a href="apoio/colaboradores">Colaboradores</a></li>
							<li><a href="apoio/patrocinadores">Patrocinadores</a></li>
						</ul>
					</li>
					<li><a style="<?php if($menu == 'publicacoes') echo $menu_ativo?>" href="publicacoes">Publicações</a></li>
					<li><a style="<?php if($menu == 'eventos') echo $menu_ativo?>" href="eventos">Eventos</a></li>
					<li><a style="<?php if($menu == 'contato') echo $menu_ativo?>" href="" id="contato">Contato</a></li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div> <!-- /.cabecalho -->
</body>
</html>