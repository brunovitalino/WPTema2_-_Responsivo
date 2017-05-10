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

	<div class="slider">
		<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/images/slider-01.jpg">
	</div>

	<div class="container">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in rhoncus tellus. Phasellus tempor a odio et tincidunt. Phasellus vitae nibh blandit nibh congue aliquam nec nec mauris. Pellentesque fermentum a est ac egestas. Phasellus ipsum eros, molestie sit amet placerat sed, efficitur at sem. Aliquam porta lobortis lorem quis ullamcorper. Sed dui nibh, ornare a turpis quis, interdum posuere nunc. Nam in risus ut diam tristique tincidunt. Pellentesque volutpat tristique sagittis. Maecenas egestas molestie scelerisque. Donec vestibulum vestibulum neque eget placerat. Nunc eu sapien elit. Cras lacinia ex a aliquam eleifend. Sed id eros vitae lacus porttitor gravida. Vivamus mollis, turpis ac convallis pharetra, libero dui ultricies turpis, vehicula mollis turpis nibh elementum ante.</p> 
		<p>Morbi dapibus purus vitae blandit viverra. Nulla vulputate mi id dolor faucibus aliquam. Sed lobortis nisi metus, quis facilisis nunc euismod in. Quisque a gravida justo. Donec non consectetur orci, vel eleifend orci. Proin sit amet velit nec leo placerat ullamcorper sed at purus. Vivamus consequat tempor sagittis. Maecenas scelerisque, lectus non placerat faucibus, ligula risus fermentum sapien, nec euismod nunc nisl eget quam. Fusce fermentum lacinia eros et eleifend. Sed felis quam, finibus maximus urna in, tristique iaculis neque. Etiam pellentesque est ante, at tincidunt nisl maximus vel. Aliquam erat volutpat. Curabitur tortor arcu, tincidunt nec vestibulum at, euismod sit amet enim. Suspendisse potenti. Vestibulum tempor a tortor a ultricies. Praesent id tempor augue.</p> 
		<p>In feugiat odio massa, sed vestibulum dolor dignissim sed. Nam non auctor nibh. Maecenas quis ligula nunc. Duis commodo feugiat orci, ut ultrices ante tempor in. Quisque ut elit tempus, luctus orci at, aliquam purus. Maecenas cursus, quam in ultricies vestibulum, magna eros efficitur magna, eget aliquam mauris purus nec elit. Nulla blandit magna nec tortor tristique facilisis.</p>
	</div>