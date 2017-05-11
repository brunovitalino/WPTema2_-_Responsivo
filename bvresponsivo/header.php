<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<div class="header">
	<nav class="navbar navbar-default navbar-custom">
		<div class="container"> <!-- => Removido o container-fluid, que posiciona na tela 100% -->

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">BRUNO<span>WP</span></a>
		    </div>

		    <?php
	            wp_nav_menu(
	            	array(
		                'menu'              => 'Menux', //Aqui informe o NOME de menu criado no WP
		                'theme_location'    => 'menu-header', //Tema "Menu header", localizado no functions.php
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-collapse-custom',
		                'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav navbar-right',
		                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'            => new WP_Bootstrap_Navwalker() //Custom Navigation Walker
	                )
	            );
	        ?>

		</div><!-- /.container -->
	</nav>
</div>