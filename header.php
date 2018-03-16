<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
new WOW().init();
</script>

</head>

<body <?php body_class(); ?>>
<div id="page">
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-dark">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="row no-gutters collapse navbar-collapse" id="navbarSupportedContent">
							<div class="col-md-auto">
								<a href="<?php echo esc_url( home_url( '' ) ); ?>"><img class="img-fluid logo-header" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.jpg"; ?>"/></a>
							</div>
							<div class="col-md-auto offset-md-1 link">
								<a class="nav-link" href="<?php echo home_url( '/historia' ); ?>">Início</a>
							</div>
							<div class="col-md-auto link">
								<a class="nav-link" href="<?php echo home_url( '/sobre' ); ?>">A Xtreme</a>
							</div>
							<div class="col-md-auto link">
								<a class="nav-link" href="<?php echo home_url( '/modalidades' ); ?>">Modalidades</a>
							</div>
							<div class="col-md-auto link">
								<a class="nav-link" href="<?php echo home_url( '/blog' ); ?>">Blog</a>
							</div>
							<div class="col-md-auto link">
								<a class="nav-link" href="<?php echo home_url( '/contato' ); ?>">Trabalhe Conosco</a>
							</div>
							<div class="col-md-auto link">
								<a class="nav-link" href="<?php echo home_url( '/contato' ); ?>">Contato</a>
							</div>
							<div class="col-md redes">
								<ul class="redes_sociais_header">
									<li class="youtube"><a target="_blank" href="#"></a></li>
									<li class="instagram"><a target="_blank" href=""></a></li>
									<li class="twitter"><a target="_blank" href="#"></a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->


