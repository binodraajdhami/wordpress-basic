<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?></title>
		
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						
						<a href="<?php bloginfo('url'); ?>">
							
							<?php
							
								if ( function_exists( 'the_custom_logo' ) ) {
								    the_custom_logo();
								}

							?>

						</a>
						
					</div>
					<div class="col-sm-8">
						<p><?php bloginfo('description'); ?></p>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
				</ul>
			</div>
		</nav>