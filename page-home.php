<?php
get_header(); ?>
<div id="banner">
	<?php echo do_shortcode( '[smartslider3 slider=1]' )?>
</div>
<div id="content">
	<section class="produto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h2>Ginásticas e Danças</h2>
				</div>
			</div><br><br>
			<div class="row">
				<?php
				$query = new WP_Query( array('posts_per_page' => 3, 'tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => array('dancas-e-yoga','ginasticas')) ), 'post_type' => 'modalidade', 'orderby' => 'rand', 'order' => 'ASC') );
				while ( $query->have_posts() ) : $query->the_post();		
				?>
				<div class="col-md-4 fadeInUp wow">
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
		</div>
	</section>
	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h3 class="fadeInUp wow">Conheça a Academia</h3>
					<h1 class="fadeInUp wow">Xtreme Santa Clara</h1>
					<p class="fadeIn wow">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
					</p><br><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( 'sobre' ) ); ?>">saiba mais</a>
				</div>
			</div>
		</div>
	</section>
	<section class="produto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h2>Lutas</h2>
				</div>
			</div><br><br>
			<div class="row">
				<?php
				$query = new WP_Query( array('posts_per_page' => 3, 'tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => array('lutas')) ), 'post_type' => 'modalidade', 'orderby' => 'rand', 'order' => 'ASC') );
				while ( $query->have_posts() ) : $query->the_post();			
				?>
				<div class="col-md-4 fadeInUp wow">
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
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div>

<?php get_footer(); ?>
