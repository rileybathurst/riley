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

		//get form elements and email
		$name = $_POST['name'];
		$email = $_POST['email'];
		$enq = $_POST['details'];

		// Take action based on the score returned:
		if ($recaptcha->score >= 0.5) {
			// Verified - send email

			//email to riley@rileybathurst.com
			$to      = 'riley@rileybathurst.com';
			$subject = 'Riley Bathurst enquiry: '.$name;

			//write email
			$message = '
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Untitled Document</title>
			</head>

			<body bgcolor="#ebebeb">

				<table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ebebeb" align="center">
					<tbody>
						<tr>
							<table style="border-left: 2px solid #e6e6e6; border-right: 2px solid #e6e6e6;" cellspacing="0" cellpadding="25" width="605" align="center">

								<tr>
									<td width="596" align="center" style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left; height: 50px;">
										<p style="margin-block-end: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">Riley Bathurst Enquiry</p>
									</td>
								</tr>


								<tr>
									<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: left;" align="center">

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											Thanks for your contact, '.
												$name .
											' we will be in touch ASAP.
										</p>

										<hr style="color:#d9d9d9;background-color:#d9d9d9;min-height:1px;border:none;"/>

										<p>
											For your record your message was, <br />'.
												$name .
											' <br /> ' .
												$email .
											' <br /> ' .
												$enq .
											'
										</p>
								</tr>

								<tr>
									<td style="background-color: #ffffff; border-top: 0px solid #000000; text-align: center;" align="center">
										<span style="font-size: 11px; color: #575757; line-height: 200%; font-family: arial; text-decoration: none;">
											Riley Bathurst. PO Box 2673. Olympic Valley. CA. 96146. USA.<br />
											<a href="mailto:riley@rileybathurst.com">riley@rileybathurst.com</a><br />
											<a href="tel:+1 (530) 386-6296‬">Phone +1 (530) 386-6296‬</a>
										</span>
									</td>
								</tr>

						</table>
					</tr>
				</tbody>
			</table>
			</body>
			</html>';

			add_filter( 'wp_mail_content_type', 'set_content_type' );
				function set_content_type( $content_type ) {
					return 'text/html';
			}

			wp_mail($to, $subject, $message);
			wp_mail($email, $subject, $message);

			wp_redirect( home_url() . '/contact/thanks/?n=' . $name );
			exit();

		} else {
			// Not verified - show form error
			wp_redirect( home_url() . '/contact/checkbox/?n=' . $name . '&e=' . $email . '&d=' . $enq );
		}

	} else {
		wp_redirect( home_url() . '/contact/not-checked' );
	}
} // closes out the prefix_admin_form

add_action( 'admin_post_form', 'prefix_admin_form' );
add_action( 'admin_post_nopriv_form', 'prefix_admin_form' );
