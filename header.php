<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Preloader -->
	<?php get_template_part( 'templates/header/preloader' ); ?>

	<!-- Page Wrapper -->
	<div id="page-wrap">

		<!-- Boxed Wrapper -->
		<div id="page-header" <?php echo esc_attr(savona_options( 'general_header_width' )) === 'boxed' ? 'class="boxed-wrapper"': ''; ?>>

		<?php

		// Top Bar
		get_template_part( 'templates/header/top', 'bar' );

		// Main Navigation
		if ( savona_options( 'main_nav_position' ) === 'above' ) {
			get_template_part( 'templates/header/main', 'navigation' );
		}

		// Page Header
		get_template_part( 'templates/header/page', 'header' );

		// Main Navigation
		if ( savona_options( 'main_nav_position' ) === 'below' ) {
			get_template_part( 'templates/header/main', 'navigation' );
		}
		
		?>

		</div><!-- .boxed-wrapper -->

		<!-- Page Content -->
		<div id="page-content">

			<?php get_template_part( 'templates/sidebars/sidebar', 'alt' ); // Sidebar Alt ?>