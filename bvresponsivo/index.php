<?php get_header() ?>

<div class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  	<?php
		  		$args = array(
		  			'post_type'	=> 'slider',
		  			'showposts'	=> 5,
		  			'orderby'	=> 'date',
		  			'order'		=> ASC
		  		);
		  		$my_slider = get_posts($args);
		  		$cont = 0;

		  		if($my_slider) {
		  			foreach ($my_slider as $post) {
		  	?>
		    			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $cont; ?>" <?php if($cont==0): ?> class="active" <?php endif; ?> ></li>
		  	<?php
		  				$cont++; //Nao e preciso zerar contador, pois ele so vai contar o ate o ultimo post/slider existente
		  			}
		  		}
		  	?>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		  	<?php
		  		$cont2 = 0;
		  		if($my_slider) {
		  			foreach ($my_slider as $post) {
		  				setup_postdata( $post );
		  	?>
					    <div class="item <?php if($cont2==0) echo "active";?>">
							<?php the_post_thumbnail('full'); ?>
							<div class="carousel-caption">
								<h2><?php the_title(); ?></h2>
								<a class="button-leia-mais" href="<?php the_field('link_slider'); ?>">LEIA MAIS</a>
							</div>
					    </div>
		    <?php
		    			$cont2++; //Nao e preciso zerar contador, pois ele so vai contar o ate o ultimo post/slider existente
		  			}
		  		}
		    ?>			    
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div class="servicos">
	<div class="container">
		<?php
				$args = array(
						'post_type' => 'servicos',
						'showposts' => 6,
						'orderby'	=> 'date',
						'order'		=> ASC
				);
				$my_servicos = get_posts($args);
				$j = 0;
				$linha_criada = false;

				foreach ($my_servicos as $post) {
					if ($linha_criada==false) {
		?>	
						<div class="row">
		<?php
						$linha_criada = true;
					}
							setup_postdata( $post );
		?>
							<div class="col-md-4 col-lg-4">
								<i class="<?php the_field('iconex'); ?>"></i>
								<h2><?php the_title(); ?></h2>
								<?php the_excerpt(); ?>
							</div>
		<?php
							$j++;
					if ($j>=3) {
		?>
						</div>
		<?php
						$j = 0;
						$linha_criada = false;
					}
				}
		?>
	</div>
</div>

<div class="sobre">
	<div class="container">
		<div class="row">
			<?php
				$args = array(
					'post_type' => 'page',
					'pagename'	=> 'sobre'
				);
				$my_sobre = get_posts($args);

				if ($my_sobre) {
					foreach ($my_sobre as $post) {
						setup_postdata( $post );
			?>
						<div class="col-md-12 col-lg-12">
							<h2><?php the_title(); ?></h2> <!-- > Como é apenas uma pagina, não foi preciso aumentar a complexidade criando lógica para inserir uma nova class row. Usaremos css para centralizar o título. -->
						</div>
						<div class="col-md-6 col-lg-6">
							<?php the_content(); ?>
						</div>
						<div class="col-md-6 col-lg-6">
							<?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?>
						</div>
			<?php
					}

				}
			?>
		</div>
	</div>
</div>

<?php get_footer() ?>