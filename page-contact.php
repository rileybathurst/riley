<?php
/*
Template Name: Contact
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-12917302-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-12917302-1');
	</script>

	<!-- https://realfavicongenerator.net -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#c22127">
	<meta name="msapplication-TileColor" content="#c22127">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/bundle.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!-- this should be localized -->

</head>

<body <?php body_class(); ?>>

	<header class="site-header">

		<div class="breadcrumbs"><?php get_breadcrumb(); ?></div>

		<div class="header-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="riley bathurst design home"><svg data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 133.36 150.54" class="header-logo"><path d="M45.87 82.26l.74.89 24.75 30.14-4.21 11.06-23.9 3.86 17.27 21.2a54.16 54.16 0 0 0 9.14-2.56h-.25l20.06-53.28-20.12-24.39q12-6.92 18.25-15t6.22-21.16q0-14.44-10.37-23.72a37.58 37.58 0 0 0-3.08-2.45L68.63 37.72 45.06 29.1 56.15.04Q39.47.31 28.87 9.09q-11 9.02-11 25.14a36.57 36.57 0 0 0 3.5 15.61 61.17 61.17 0 0 0 9.9 14.72l-3.1 1.9q-15 9.3-21.6 18.79a35.57 35.57 0 0 0-2.21 3.71zm-1.11-52.25l23.43 8.62a17 17 0 0 1-8.54 8.27 54.18 54.18 0 0 1-10.78 3.54 125.52 125.52 0 0 1-4-12.48 16.25 16.25 0 0 1-.16-7.95z"/><path d="M13.71 138.31l19.78-52-30.17 4.87A41.57 41.57 0 0 0 0 108.08q0 16.1 12.73 29.3c.32.3.65.61.98.93zm98.93-67.68l-24.08 63.75h.06l-4.75 12.47h10.67l28.66-76.22zm-6.31 76.21h27.04l-18.64-22.26-8.4 22.26zM26.35 110.7L15.3 139.77q12.36 10.77 32.8 10.78a67.37 67.37 0 0 0 10.12-.75z"/></svg></a>
		</div>

		<div class="site-branding-text">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php bloginfo( 'name' ); ?></a></h1>
		</div>

		<?php get_template_part( 'template-parts/header/feature-image' ); ?>

		<nav class="navigation-top">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'top-menu',
			) ); ?>
		</nav>

		<div class="spine"><?php echo get_bloginfo( 'description' ); ?></div>
	</header>

	<div class="background-dirty">
		<div class="site-main" role="main">

			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>

					<article <?php post_class(); ?>> <!-- this doesnt work as post class closes out -->

						<div class="spine-border"></div>

						<div class="article-header">
							<h2 class="page-title">
								<?php the_title(); ?>
							</h2>
						</div>

						<div class="article-content">
							<?php the_content(); ?>

							<!-- enctype='multipart/form-data' is key to submitting documents -->
							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" enctype='multipart/form-data' method="post" class="article-form">

								<input type="hidden" name="action" value="contact">
								<input type="hidden" name="data" value="contactid"><!-- slightly different value to differentiate, not used -->

								<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
									<i class="material-icons mdc-text-field__icon">person</i>
									<input class="mdc-text-field__input" type="text" name="name" id="name" required>
									<div class="mdc-notched-outline">
										<div class="mdc-notched-outline__leading"></div>
										<div class="mdc-notched-outline__notch">
											<label class="mdc-floating-label">Name</label>
										</div>
										<div class="mdc-notched-outline__trailing"></div>
									</div>
								</div>

								<br>

								<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
									<i class="material-icons mdc-text-field__icon">email</i>
									<input class="mdc-text-field__input" type="email" name="email" id="email" required>
									<div class="mdc-notched-outline">
										<div class="mdc-notched-outline__leading"></div>
										<div class="mdc-notched-outline__notch">
											<label class="mdc-floating-label">email</label>
										</div>
										<div class="mdc-notched-outline__trailing"></div>
									</div>
								</div>

								<br>

								<div class="mdc-text-field mdc-text-field--textarea">
									<textarea id="textarea" class="mdc-text-field__input" rows="8" cols="40" placeholder="Enquiry" name="details" id="details"></textarea>
									<div class="mdc-notched-outline">
										<div class="mdc-notched-outline__leading"></div>
										<div class="mdc-notched-outline__notch">
											<label for="textarea" class="mdc-floating-label">Enquiry</label>
										</div>
										<div class="mdc-notched-outline__trailing"></div>
									</div>
								</div>

								<br>
								<!-- send -->
								<input type="submit" class="mdc-button mdc-button--raised">
							</form>
						</div>
					</article>

				<?php endwhile;
			endif; ?>

		</div><!-- .site-main -->
	</div>

	<script src="<?php echo get_template_directory_uri() ?>/dist/bundle.js"></script>

<?php get_footer(); ?>
