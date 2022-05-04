<!DOCTYPE html> <!-- HTML5 -->
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/Person">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- SEO optimization -->
	<meta name="description" content="<?php the_title(); ?>" itemprop="description"> <!-- this isnt in yoast? April 2020 so it's here for now -->
	<!-- I would like to control this rather than relying on Yoast but until I get the I'm just adding both -->
	<meta name="birthdate" content="1987-10-30" itemprop="birthdate">
	<meta name="birthPlace" content="Christchurch, New Zealand" itemprop="birthplace">
	<meta name="email" content="mailto:riley@rileybathurst.com" itemprop="email">
	<meta name="telephone" content="tel: (530) 386-6296" itemprop="telephone">
	<meta name="familyName" content="Bathurst" itemprop="familyName">
	<meta name="givenName" content="Riley" itemprop="givenName">
	<meta name="gender" content="male" itemprop="gender">
	<!-- <meta name="hasOccupation" content="Designer" itemprop="hasOccupation"> google structured data doesnt like this -->
	<meta name="jobTitle" content="Designer" itemprop="jobTitle">
	<meta name="nationality" content="New Zealand" itemprop="nationality">
	<meta name="worksFor" content="Tahoe Web Shop" itemprop="worksFor">

	<!-- recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- https://realfavicongenerator.net -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#c22127">
	<meta name="msapplication-TileColor" content="#c22127">
	<meta name="theme-color" content="#c32522">

	<meta
		http-equiv="Content-Security-Policy"
		content="default-src 'self' https://www.google.com https://www.gstatic.com;
			style-src 'self' 'unsafe-inline';
			script-src 'self' https://www.google.com https://www.gstatic.com https://www.googletagmanager.com https://cdn.jsdelivr.net https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js https://player.vimeo.com 'nonce-351731468999';
			img-src 'self' secure.gravatar.com;
			font-src 'self' data:;
			child-src https://www.youtube.com https://player.vimeo.com;"
	/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="site-header">

		<div class="breadcrumbs"><?php get_breadcrumb(); ?></div>

		<div class="header-logo"> <!-- this can be nicely traded out for a custom logo if its an image but I want an svg -->
			<!-- I could do this with a custom backend piece but its not as nice plus its another request -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="riley bathurst design home"><svg data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 133.36 150.54" class="header-logo"><path d="M45.87 82.26l.74.89 24.75 30.14-4.21 11.06-23.9 3.86 17.27 21.2a54.16 54.16 0 0 0 9.14-2.56h-.25l20.06-53.28-20.12-24.39q12-6.92 18.25-15t6.22-21.16q0-14.44-10.37-23.72a37.58 37.58 0 0 0-3.08-2.45L68.63 37.72 45.06 29.1 56.15.04Q39.47.31 28.87 9.09q-11 9.02-11 25.14a36.57 36.57 0 0 0 3.5 15.61 61.17 61.17 0 0 0 9.9 14.72l-3.1 1.9q-15 9.3-21.6 18.79a35.57 35.57 0 0 0-2.21 3.71zm-1.11-52.25l23.43 8.62a17 17 0 0 1-8.54 8.27 54.18 54.18 0 0 1-10.78 3.54 125.52 125.52 0 0 1-4-12.48 16.25 16.25 0 0 1-.16-7.95z"/><path d="M13.71 138.31l19.78-52-30.17 4.87A41.57 41.57 0 0 0 0 108.08q0 16.1 12.73 29.3c.32.3.65.61.98.93zm98.93-67.68l-24.08 63.75h.06l-4.75 12.47h10.67l28.66-76.22zm-6.31 76.21h27.04l-18.64-22.26-8.4 22.26zM26.35 110.7L15.3 139.77q12.36 10.77 32.8 10.78a67.37 67.37 0 0 0 10.12-.75z"/></svg></a>
		</div>

		<?php get_template_part( 'template-parts/header/feature-image' ); ?>

		<?php if ( is_single() ) { ?><!-- I dont love this way of controlling the php -->
			<div class="single-header-top-line">
				<div class="site-branding-text">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php bloginfo( 'name' ); ?></a></h1>
				</div>

				<nav class="navigation-top">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'top-menu',
					) ); ?>
				</nav>
				<!-- I think I want to start doing a hover to change the words but this would be custom content not a wp_nav_menu -->

			</div>
		<?php } else { ?>
			<div class="site-branding-text">
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

			<nav class="navigation-top">
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'top-menu',
				) ); ?>
			</nav>
		<?php } ?>

		<div class="spine"><?php echo get_bloginfo( 'description' ); ?></div>

	</header>
