<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left wow fadeIn">
					<h1>Fale com a Academia Xtreme Santa Clara</h1>
					<br>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>
				</div>
				<div class="col-md-6 text-left wow fadeIn">
					<div class="col-md-12 videoWrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467814.9804093564!2d-47.041120950597595!3d-23.64717016917304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5855caa088ef%3A0xee3fef7424d63dfc!2sR.+S%C3%A3o+Bento%2C+545+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01011-100!5e0!3m2!1spt-BR!2sbr!4v1449080600451" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div><!-- #content -->
<?php get_footer(); ?>
