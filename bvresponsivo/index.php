<?php get_header() ?>

	<div class="slider">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<?php
			  		$args = array
			  		(
			  			'post_type' => 'slider',
			  			'showposts' => 5
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
									<a class="button-leia-mais" href="#">LEIA MAIS</a>
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

<?php get_footer() ?>