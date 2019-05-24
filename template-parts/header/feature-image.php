<?php
// check if category has a specific image first
$current_category = single_cat_title("", false);

$filename = TEMPLATEPATH . "/img/" . $current_category . ".jpg" ;
$pathname = get_template_directory_uri() . '/img/' . $current_category . '.jpg' ;

if (file_exists($filename)) { ?>
	<div class="header-color-blocking"></div>
	<figure class="custom-header-media overlaying-image"><img src="<?php echo $pathname; ?>" alt="category image" class="opacity-holder"></figure>
<?php }

elseif ( is_attachment()) { ?>
	<figure class="custom-header-photo">
		<?php
			$image_size = apply_filters( 'wporg_attachment_size', 'large' );
			echo wp_get_attachment_image( get_the_ID(), $image_size );
		?>
	</figure>
<?php } // end of attachment

elseif ( is_single('Priest')) {
	get_template_part( 'template-parts/header/priest-image' );
}

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
				<div class="cfimg shadow">
					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-1080x720.webp" type="image/webp" media="(min-width: 960px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-1080x720.jpg" media="(min-width: 960px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-960x640.webp" type="image/webp" media="(min-width: 720px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-960x640.jpg" media="(min-width: 720px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-720x480.webp" type="image/webp" media="(min-width: 640px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-720x480.jpg" media="(min-width: 640px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-640x427.webp" type="image/webp" media="(min-width: 360px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-640x427.jpg" media="(min-width: 360px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-360x240.webp" type="image/webp" media="(max-width: 360px)" alt="riley bathurst photographer and outdoors enthusiast">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-360x240.jpg" media="(max-width: 360px)" alt="riley bathurst photographer and outdoors enthusiast">

						<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-adventure-360x240.jpg" alt="riley bathurst photographer and outdoors enthusiast">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-1080x722.webp" type="image/webp" media="(min-width: 960px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-1080x722.jpg" media="(min-width: 960px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-960x641.webp" type="image/webp" media="(min-width: 720px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-960x641.jpg" media="(min-width: 720px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-720x481.webp" type="image/webp" media="(min-width: 640px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-720x481.jpg" media="(min-width: 640px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-640x427.webp" type="image/webp" media="(min-width: 360px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-640x427.jpg" media="(min-width: 360px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-360x240.webp" type="image/webp" media="(max-width: 360px)" alt="riley bathurst designer with energy">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-360x240.jpg" media="(max-width: 360px)" alt="riley bathurst designer with energy">

						<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-energy-360x240.jpg" alt="riley bathurst designer with energy">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-1080x720.webp" type="image/webp" media="(min-width: 960px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-1080x720.jpg" media="(min-width: 960px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-960x640.webp" type="image/webp" media="(min-width: 720px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-960x640.jpg" media="(min-width: 720px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-720x480.webp" type="image/webp" media="(min-width: 640px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-720x480.jpg" media="(min-width: 640px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-640x426.webp" type="image/webp" media="(min-width: 360px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-640x426.jpg" media="(min-width: 360px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-360x240.webp" type="image/webp" media="(max-width: 360px)" alt="riley bathurst photographer with style">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-360x240.jpg" media="(max-width: 360px)" alt="riley bathurst photographer with style">

						<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-motorbike-photography-360x240.jpg" alt="riley bathurst photographer with style">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-1080x721.webp" type="image/webp" media="(min-width: 960px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-1080x721.jpg" media="(min-width: 960px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-960x641.webp" type="image/webp" media="(min-width: 720px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-960x641.jpg" media="(min-width: 720px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-720x481.webp" type="image/webp" media="(min-width: 640px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-720x481.jpg" media="(min-width: 640px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-640x427.webp" type="image/webp" media="(min-width: 360px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-640x427.jpg" media="(min-width: 360px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-360x240.webp" type="image/webp" media="(max-width: 360px)" alt="riley bathurst designer in the wilderness">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-360x240.jpg" media="(max-width: 360px)" alt="riley bathurst designer in the wilderness">

						<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-portrait-360x240.jpg" alt="riley bathurst designer in the wilderness">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-1080x720.webp" type="image/webp" media="(min-width: 960px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-1080x720.jpg" media="(min-width: 960px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-960x640.webp" type="image/webp" media="(min-width: 720px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-960x640.jpg" media="(min-width: 720px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-720x480.webp" type="image/webp" media="(min-width: 640px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-720x480.jpg" media="(min-width: 640px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-640x427.webp" type="image/webp" media="(min-width: 360px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-640x427.jpg" media="(min-width: 360px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-360x240.webp" type="image/webp" media="(max-width: 360px)" alt="riley bathurst designer in tahoe">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-360x240.jpg" media="(max-width: 360px)" alt="riley bathurst designer in tahoe">

						<img src="<?php echo content_url(); ?>/uploads/2019/05/Riley-Bathurst-photography-profile-360x240.jpg" alt="riley bathurst designer in tahoe">
					</picture>
				</div>
			</div>
		</div>

<?php }
