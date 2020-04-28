<?php
// check if category has a specific image first
$current_category = single_cat_title("", false);

$filename = TEMPLATEPATH . '/img/' . $current_category . ".jpg" ; // why is vs code showing quotes in red?
$pathname = get_template_directory_uri() . '/img/' . $current_category;

if (file_exists($filename)) { ?> <!-- currently this is only used for photography sort of as a test case -->
	<div class="header-color-blocking"></div>
	<picture class="custom-header-media overlaying-image">
		<source srcset="<?php echo $pathname; ?>.jpg" media="(min-width: 2160px)"><!-- largest size has no extension -->
		<source srcset="<?php echo $pathname; ?>-1080.jpg" media="(min-width: 1920px)">
		<source srcset="<?php echo $pathname; ?>-960.jpg" media="(min-width: 1440px)">
		<source srcset="<?php echo $pathname; ?>-720.jpg" media="(min-width: 1280px)">
		<source srcset="<?php echo $pathname; ?>-640.jpg" media="(min-width: 720px)"><!-- take up half the screen so media query is doubled -->
		<!-- <source srcset="php echo $pathname; ?>.webp" type="image/webp" media="(max-width: 360px)"> -->
		<img src="<?php echo $pathname; ?>-360.jpg" alt="category image" class="opacity-holder" load="lazy"> 
		<!-- this runs a single image that can be far too big -->
	</picture>
<?php }

elseif ( is_attachment()) { ?>
	<figure class="custom-header-photo">
		<?php
			$image_size = apply_filters( 'wporg_attachment_size', 'large' );
			echo wp_get_attachment_image( get_the_ID(), $image_size );
		?>
	</figure>
<?php } // end of attachment

/* // this needs to automate
// I would like to get back to the folding laptop its a pretty cool little demo
elseif ( is_single('Priest')) {
	get_template_part( 'template-parts/header/priest-image' );
} */

/* elseif ( is_single('Authentic Alignment Wellness')) {
	get_template_part( 'template-parts/header/aaw-image' );
} */

elseif ( is_single()) {

	if (have_posts()) {
	while (have_posts()) : the_post();

	if (get_post_meta( $post->ID, 'featured_video', true )) { ?>
		<figure class="custom-header-featured-video responsive-embed widescreen"><?php echo get_post_meta( $post->ID, 'featured_video', true ); ?></figure> <!-- this is having issues on firefox -->
	<?php } elseif ( has_post_thumbnail() ) {
	$id = get_the_ID(); ?>

		<figure class="custom-header-media"><?php the_post_thumbnail( $id ); ?></figure>
	<?php } else { ?>
		<figure class="custom-header-media"><?php the_custom_header_markup(); ?></figure>
	<?php }
endwhile;
	}
} else { ?>
<div class="header-color-blocking"></div>
<div class="custom-header-media overlaying-image">
	<div class="hero gp-top">
		<!-- no script Cross fading images aka slider aka carousel http://css3.bradshawenterprises.com/cfimg/ -->
		<div class="cfimg">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-1080x720.webp" type="image/webp" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-1080x720.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-960x640.webp" type="image/webp" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-720x480.webp" type="image/webp" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-640x426.webp" type="image/webp" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-640x426.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-360x240.webp" type="image/webp" media="(max-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-360x240.jpg" media="(max-width: 360px)">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-adventure-360x240.jpg" alt="riley bathurst photographer and outdoors enthusiast">
			</picture>

			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-1080x720.webp" type="image/webp" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-1080x720.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-960x640.webp" type="image/webp" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-720x480.webp" type="image/webp" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-640x426.webp" type="image/webp" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-640x426.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-360x240.webp" type="image/webp" media="(max-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-360x240.jpg" media="(max-width: 360px)">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-energy-360x240.jpg" alt="riley bathurst designer with energy">
			</picture>

			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-1080x720.webp" type="image/webp" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-1080x720.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-960x640.webp" type="image/webp" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-720x480.webp" type="image/webp" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-640x426.webp" type="image/webp" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-640x426.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-360x240.webp" type="image/webp" media="(max-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-360x240.jpg" media="(max-width: 360px)">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-motorbike-photography-360x240.jpg" alt="riley bathurst photographer with style">
			</picture>

			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-1080x720.webp" type="image/webp" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-1080x720.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-960x640.webp" type="image/webp" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-720x480.webp" type="image/webp" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-640x426.webp" type="image/webp" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-640x426.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-360x240.webp" type="image/webp" media="(max-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-360x240.jpg" media="(max-width: 360px)">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-portrait-360x240.jpg" alt="riley bathurst designer in the wilderness">
			</picture>

			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-1080x720.webp" type="image/webp" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-1080x720.jpg" media="(min-width: 960px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-960x640.webp" type="image/webp" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-960x640.jpg" media="(min-width: 720px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-720x480.webp" type="image/webp" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-720x480.jpg" media="(min-width: 640px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-640x426.webp" type="image/webp" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-640x426.jpg" media="(min-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-360x240.webp" type="image/webp" media="(max-width: 360px)">
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-360x240.jpg" media="(max-width: 360px)">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/slider/Riley-Bathurst-photography-profile-360x240.jpg" alt="riley bathurst designer in tahoe">
			</picture>
		</div>
	</div>
</div>

<?php }
