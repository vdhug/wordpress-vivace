<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title> Vivace Engenharia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">


	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	
	<?php wp_head(); ?>
	
</head>

<body>

	<header class="header">
		<a href="<?php bloginfo('url'); ?>">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-vivace.png" alt="logo-vivace">
		</a>
		<nav>
		<?php
						$args = array(
							'menu' => 'principal',
							'theme_location' => 'menu-principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
		
		</nav>
	</header>


