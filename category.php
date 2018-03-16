<?php
get_header(); 
$category = get_the_category();
?>

<div id="content">
	<section class="modalidades">
		<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h1 class="alexa"><?php echo $category[0]->name; ?></h1>
				</div>
			</div><br><br>

			<div class="row">
			<?php 
			$i = 1;
			$args = array(
				'tax_query' => array(array('taxonomy' => 'modcategoria', 'field' => 'slug', 'terms' => $category[0]->name) ),
				'post_type' => 'modalidade',
			    'orderby' => 'post_date',
			    'order' => 'DESC');
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();
				?>
					<div class="col-md-4 fadeInUp wow">
						<div class="box">
							<?php the_post_thumbnail('', array(
								'class' => "e-cinza img-fluid",
							)); ?>
							<div class="desc-container">
								<h3><?php the_title(); ?></h3>
								<p>
									<?php echo get_the_twitter_excerpt(); ?>
								</p><br>
								<a class="btn-amarelo"  href="<?php the_permalink(); ?>">saiba mais</a>
							</div>
						</div>
					</div>
					<?php
					if($i == 3):
					?>
						</div><div class="row">
					<?php
					endif;
					$i++;
					?>
				<?php endwhile; ?>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div>

<?php get_footer(); ?>
