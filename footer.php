	<footer id="footer">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md">
					<a href="<?php echo home_url( '' ); ?>">Página Inicial</a>
				</div>
				<div class="col-md">
					<a href="<?php echo home_url( '/sobre' ); ?>">A Xtreme Santa Clara</a>
				</div>
				<div class="col-md">
					<a href="<?php echo home_url( '/modalidades' ); ?>">Modalidades</a>
				</div>
				<div class="col-md">
					<a href="<?php echo home_url( '/horarios' ); ?>">Horários</a>
				</div>
				<div class="col-md">
					<a href="<?php echo home_url( '/aula-experimental' ); ?>">Aula Experimental</a>
				</div>
				<div class="col-md">
					<a target="_blank" href="<?php echo home_url( '/blog' ); ?>">Blog</a>
				</div>
				<div class="col-md">
					<a href="<?php echo home_url( '/contato' ); ?>">Contato</a>
				</div>
			</div><br>
			<div class="row wow fadeIn">
				<div class="col-md-12">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/academiaxtremegold"></a></li>
						<li class="instagram"><a target="_blank" href="https://www.instagram.com/xtremesantaclara/"></a></li>
						<li class="twitter"><a target="_blank" href="https://www.facebook.com/xtremesantaclara/"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
	<div class="copyrino">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<span>&copy; <?php echo date('Y') ?> Academia Xtreme Santa Clara Todos os Direitos Reservados</span>
					<a target="_blank" class="float-right" href="http://seimidigital.com.br/">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
