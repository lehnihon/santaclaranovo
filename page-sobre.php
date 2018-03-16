<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="sobre-detalhes">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 class="fadeInUp wow">Conheça a Academia</h3>
					<h1 class="fadeInUp wow">Xtreme Santa Clara</h1>
					<p class="fadeInUp wow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud 
exercitation ullamco laboris nisi ut aliquip ex ea commodo 
consequat. Duis aute irure dolor in reprehenderit in volupt
Excepteur sint occaecat cupidatat non proident, sunt in</p><br><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( 'contato' ) ); ?>">contato</a>
				</div>
				<div class="col-md-6">
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/academia.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</section>

</div><!-- #content -->
<?php get_footer(); ?>
