<?php
get_header(); ?>
<div id="banner">
	<?php echo do_shortcode( '[smartslider3 slider=1]' )?>
</div>
<div id="content">
	<section class="produto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeIn">
					<h2><span class="preto">Modalidades:</span> Ginásticas</h2>
				</div>
			</div><br><br>
			<div class="wrap">
				<div class="row owl-carousel owl-a  fadeIn wow">
					<?php
					$query = new WP_Query( array('posts_per_page' => 6, 'tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => array('ginasticas')) ), 'post_type' => 'modalidade', 'orderby' => 'rand', 'order' => 'ASC') );
					$delay = 0.25;
					while ( $query->have_posts() ) : 
						$query->the_post();
						$delay += 0.25;
					?>
					<div class="col-md">
						<div class="box">
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-cinza img-fluid",
							)); ?>
							<div class="desc-container">
								<?php the_title( '<h3>', '</h3>') ?>
								<p>
									<?php echo get_the_twitter_excerpt(); ?>
								</p>
								<a class="btn-amarelo" href="<?php the_permalink(  ) ?>">saiba mais</a>
							</div>
						</div>
					</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="owl-prev-a"><img class="e-light" alt="prev" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-prev.jpg"; ?>"/></div>
				<div class="owl-next-a"><img class="e-light" alt="next" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-next.jpg"; ?>"/></div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center wow fadeIn">
					<h2><span class="preto">Modalidades:</span> Força e Resistência</h2>
				</div>
			</div><br><br>
			<div class="wrap">
				<div class="row owl-carousel owl-b  fadeIn wow">
					<?php
					$query = new WP_Query( array('posts_per_page' => 6, 'tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => array('forca-e-resistencia')) ), 'post_type' => 'modalidade', 'orderby' => 'rand', 'order' => 'ASC') );
					$delay = 0.25;
					while ( $query->have_posts() ) : 
						$query->the_post();
						$delay += 0.25;
					?>
					<div class="col-md">
						<div class="box">
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-cinza img-fluid",
							)); ?>
							<div class="desc-container">
								<?php the_title( '<h3>', '</h3>') ?>
								<p>
									<?php echo get_the_twitter_excerpt(); ?>
								</p>
								<a class="btn-amarelo" href="<?php the_permalink(  ) ?>">saiba mais</a>
							</div>
						</div>
					</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="owl-prev-b"><img class="e-light" alt="prev" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-prev.jpg"; ?>"/></div>
				<div class="owl-next-b"><img class="e-light" alt="next" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-next.jpg"; ?>"/></div>
			</div><br><br>
		</div>
	</section>
	<section id="sobre">
		<div class="container">
			<div class="row fadeIn wow">
				<div class="col-md-5">
					<h3>Conheça a Academia</h3>
					<h1>Xtreme Santa Clara</h1>
					<p>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
					</p><br><br>
					<a class="btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( 'sobre' ) ); ?>">saiba mais</a>
				</div>
				<div class="col-md-7">
					<h3 class="branco">@XtremeSantaClara</h3>
					<h2 class="amarelo">Xtreme Santa Clara</h2><br>
					<div class="row">
						<div class="col">
							<img class="e-cinza img-fluid" alt="sobre" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre1.jpg"; ?>"/>
						</div>
						<div class="col">
							<img class="e-cinza img-fluid" alt="sobre" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre2.jpg"; ?>"/>
						</div>
						<div class="col">
							<img class="e-cinza img-fluid" alt="sobre" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre3.jpg"; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img class="e-cinza img-fluid" alt="sobre" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre4.jpg"; ?>"/>
						</div>
						<div class="col">
							<img class="e-cinza img-fluid" alt="sobre" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre5.jpg"; ?>"/>
						</div>
						<div class="col">
							<img class="e-cinza img-fluid" alt="sobre" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre6.jpg"; ?>"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="produto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeIn">
					<h2><span class="preto">Modalidades:</span> Danças</h2>
				</div>
			</div><br><br>
			<div class="wrap">
				<div class="row owl-carousel owl-c  fadeIn wow">
					<?php
					$query = new WP_Query( array('posts_per_page' => 6, 'tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => array('dancas-e-yoga')) ), 'post_type' => 'modalidade', 'orderby' => 'rand', 'order' => 'ASC') );
					$delay = 0.25;
					while ( $query->have_posts() ) : 
						$query->the_post();
						$delay += 0.25;
					?>
					<div class="col-md">
						<div class="box">
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-cinza img-fluid",
							)); ?>
							<div class="desc-container">
								<?php the_title( '<h3>', '</h3>') ?>
								<p>
									<?php echo get_the_twitter_excerpt(); ?>
								</p>
								<a class="btn-amarelo" href="<?php the_permalink(  ) ?>">saiba mais</a>
							</div>
						</div>
					</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="owl-prev-c"><img class="e-light" alt="prev" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-prev.jpg"; ?>"/></div>
				<div class="owl-next-c"><img class="e-light" alt="next" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-next.jpg"; ?>"/></div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center wow fadeIn">
					<h2><span class="preto">Modalidades:</span> Arte Marciais</h2>
				</div>
			</div><br><br>
			<div class="wrap">
				<div class="row owl-carousel owl-d  fadeIn wow">
					<?php
					$query = new WP_Query( array('posts_per_page' => 6, 'tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => array('lutas')) ), 'post_type' => 'modalidade', 'orderby' => 'rand', 'order' => 'ASC') );
					$delay = 0.25;
					while ( $query->have_posts() ) : 
						$query->the_post();
						$delay += 0.25;
					?>
					<div class="col-md">
						<div class="box">
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-cinza img-fluid",
							)); ?>
							<div class="desc-container">
								<?php the_title( '<h3>', '</h3>') ?>
								<p>
									<?php echo get_the_twitter_excerpt(); ?>
								</p>
								<a class="btn-amarelo" href="<?php the_permalink(  ) ?>">saiba mais</a>
							</div>
						</div>
					</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="owl-prev-d"><img class="e-light" alt="prev" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-prev.jpg"; ?>"/></div>
				<div class="owl-next-d"><img class="e-light" alt="next" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-next.jpg"; ?>"/></div>
			</div><br><br>
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
	<section id="videos">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="preto">Xtreme Santa Clara nas redes</h2>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-4">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ZDKaxmRdLJE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/2DRkS8Djsa0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fxtremesantaclara&tabs=timeline&width=300&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/Hwn_cY6B2Tg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-4">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/E4g5kqH4e-o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div><div class="col-md-4">
					
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
