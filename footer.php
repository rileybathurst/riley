
	<footer class="site-footer">

		<?php wp_nav_menu( array(
			'theme_location'	=> 'primary',
			'menu_class'		=> 'footer_menu text-center',
		) ); ?>


		<div class="background-dirty">
			<div class="footer_info">
				<div class="footer_1"><!-- stay gold --></div>

				<div class="footer_copyright">
					<?php if(get_option('copyright') == 'on'){echo '&copy;'; } ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php
							$established = get_option('established');
							echo get_option('established'); ?><?php if(date("Y")!=$established){ echo ' - '.date("Y"); } else { echo date("Y"); }
						?>

				</div><!-- .footer_copyright -->
				<div class="footer_nav">
					<?php wp_nav_menu( array(
						'theme_location' => 'secondary',
						'menu_id'        => 'bottom-menu',
					) ); ?>
				</div><!-- .footer_nav -->
				<div class="footer_contact">
					<a href="mailto:<?php echo bloginfo ('admin_email'); ?>"><?php echo bloginfo ('admin_email'); ?></a>
					<!-- add a contact number to the theme -->
					<?php if (get_option('contact_phone')) {
						$unspaced_phone = str_replace(' ', '', get_option('contact_phone')); ?>
						<a href="tel:<?php echo $unspaced_phone; ?>"><?php echo get_option('contact_phone'); ?></a>
					<?php } ?>
				</div><!-- .footer_contact -->
				
				<div class="footer_5"><!-- stay gold --></div>

			</div><!-- footer_info -->

		</div>

	</footer>


<?php wp_footer(); ?>

	</body>
</html>
