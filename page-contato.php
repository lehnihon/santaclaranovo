<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="contato-pag">
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.819226327945!2d-46.56646028444912!3d-23.574935167979973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c309faa73a7%3A0x32a9469cb3c85de2!2sRua+Buen%C3%B3polis%2C+134+-+Vila+Santa+Clara%2C+S%C3%A3o+Paulo+-+SP%2C+03161-010!5e0!3m2!1spt-BR!2sbr!4v1521388158341" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<br>
					<p>
						<strong>Endereço</strong><br>
						Rua Buenópolis, 134 - Vila Santa Clara<br>
						São Paulo - SP
					</p>
					<p>
						<strong>Telefone</strong><br>
						11 3554-7555
					</p>
					<p>
						<strong>WhatsApp</strong><br>
						11 94026-0095
					</p>
				</div>
			</div>
		</div>
	</section>
</div><!-- #content -->
<?php get_footer(); ?>
