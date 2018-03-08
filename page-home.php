<?php
get_header(); ?>
<div id="banner"></div>
<div id="content">
	<section class="produto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<h2>Ginásticas e Danças</h2>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-4 fadeInUp wow">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Jump / Alongamento</h3>
							<p>
								Lorem ipsum dolor sit amet consecte adipiscing elit,sed do eiusmod tem incididunt ut labore dolore magna.
							</p>
							<a class="btn-amarelo" href="">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInUp wow" data-wow-delay="0.25s">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Jump / Alongamento</h3>
							<p>
								Lorem ipsum dolor sit amet consecte adipiscing elit,sed do eiusmod tem incididunt ut labore dolore magna.
							</p>
							<a class="btn-amarelo" href="">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInUp wow" data-wow-delay="0.5s">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Jump / Alongamento</h3>
							<p>
								Lorem ipsum dolor sit amet consecte adipiscing elit,sed do eiusmod tem incididunt ut labore dolore magna.
							</p>
							<a class="btn-amarelo" href="">saiba mais</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h3 class="fadeInUp wow">Conheça a Academia</h3>
					<h1 class="fadeInUp wow">Xtreme Santa Clara</h1>
					<p class="fadeInUp wow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud 
exercitation ullamco laboris nisi ut aliquip ex ea commodo 
consequat. Duis aute irure dolor in reprehenderit in volupt
Excepteur sint occaecat cupidatat non proident, sunt in</p><br><br>
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
				<div class="col-md-4 fadeInUp wow">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Jump / Alongamento</h3>
							<p>
								Lorem ipsum dolor sit amet consecte adipiscing elit,sed do eiusmod tem incididunt ut labore dolore magna.
							</p>
							<a class="btn-amarelo" href="">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInUp wow" data-wow-delay="0.25s">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Jump / Alongamento</h3>
							<p>
								Lorem ipsum dolor sit amet consecte adipiscing elit,sed do eiusmod tem incididunt ut labore dolore magna.
							</p>
							<a class="btn-amarelo" href="">saiba mais</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 fadeInUp wow" data-wow-delay="0.5s">
					<div class="box">
						<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/massagem.jpg"; ?>"/>
						<div class="desc-container">
							<h3>Jump / Alongamento</h3>
							<p>
								Lorem ipsum dolor sit amet consecte adipiscing elit,sed do eiusmod tem incididunt ut labore dolore magna.
							</p>
							<a class="btn-amarelo" href="">saiba mais</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div>

<?php get_footer(); ?>
