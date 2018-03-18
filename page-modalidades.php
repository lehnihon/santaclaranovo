<?php
get_header(); ?>

<div id="content">

	<section class="modalidades">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h1>Modalidades</h1>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-4 fadeInUp wow">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Lutas</h3>
							<?php
							$query = new WP_Query( array('tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => 'lutas') ), 'post_type' => 'modalidade', 'orderby' => 'title', 'order' => 'ASC') );
							while ( $query->have_posts() ) : $query->the_post();
								echo "<p>".get_the_title()."</p>";
							endwhile;
							?><br><br>
							<a class="btn-amarelo" href="<?php echo home_url( '/modalidades/lutas' ); ?>">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInUp wow" data-wow-delay="0.25s">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Ginásticas</h3>
							<?php
							$query = new WP_Query( array('tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => 'ginasticas') ), 'post_type' => 'modalidade', 'orderby' => 'title', 'order' => 'ASC') );
							while ( $query->have_posts() ) : $query->the_post();
								the_title();
								echo "<br>";
							endwhile;
							?><br><br>
							<a class="btn-amarelo" href="<?php echo home_url( '/modalidades/ginasticas' ); ?>">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInUp wow" data-wow-delay="0.5s">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Danças e Yoga</h3>
							<?php
							$query = new WP_Query( array('tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => 'dancas-e-yoga') ), 'post_type' => 'modalidade', 'orderby' => 'title', 'order' => 'ASC') );
							while ( $query->have_posts() ) : $query->the_post();
								the_title();
								echo "<br>";
							endwhile;
							?><br><br>
							<a class="btn-amarelo" href="<?php echo home_url( '/modalidades/dancas-e-yoga' ); ?>">saiba mais</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
