<!-- curently this has to go at the top level of the site not in the theme -->

<?php // deals with form form sent through form _POST
function prefix_admin_form() {
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

		// Build POST request:
		$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
		$recaptcha_secret = '6LdE9aYUAAAAAKQ36714olp0xEQ3QUZTOn52lIwY';
		$recaptcha_response = $_POST['recaptcha_response'];

		// Make and decode POST request:
		$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
		$recaptcha = json_decode($recaptcha);

		// Take action based on the score returned:
		if ($recaptcha->score >= 0.5) {
			// Verified - send email
			wp_redirect( home_url() . '/thanks' );
		} else {
			// Not verified - show form error
			wp_redirect( home_url() . '/sorry' );
		}

	}
}

add_action( 'admin_post_form', 'prefix_admin_form' );
add_action( 'admin_post_nopriv_form', 'prefix_admin_form' );
?>
