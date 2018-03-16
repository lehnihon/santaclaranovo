<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="detalhes">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-5 wow fadeIn">
					<div class="img-detalhes">
					<?php the_post_thumbnail('', array(
						'class' => "e-cinza img-fluid",
					)); ?>
					</div>
				</div>
				<div class="col-md-7 wow fadeIn text-left">
					<div clas="desc-detalhes">
						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; // End of the loop. ?>
		</div>
	</section>
</div><!-- #content -->
<?php get_footer(); ?>
