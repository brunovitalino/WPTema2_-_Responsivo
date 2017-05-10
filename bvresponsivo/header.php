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

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-collapse-custom" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">HOME</a></li>
		        <li><a href="#">SOBRE</a></li>
		        <li><a href="#">SERVIÇOS</a></li>
		        <li><a href="#">WORDPRESS</a></li>
		        <li><a href="#">CSS</a></li>
		        <li><a href="#">HTML</a></li>
		        <li><a href="#">BLOG</a></li>
		        <li><a href="#">CONTATO</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
	</div>