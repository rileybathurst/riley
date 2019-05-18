<?php // deals with contact form sent through form _POST
function prefix_admin_contact() {

	// Check if captcha has been checked
	$captcha = $_POST['g-recaptcha-response'];

	// If no captcha
	if(!$captcha){
		// Redirect
		wp_redirect( home_url() . '/sorry' );
		exit;
	}

	// When the captcha is checked make sure its not spam
	$secretKey = "6LdTMzIUAAAAAJYJ6c9vvBLeqXewvS59quM-r6F2";
	$ip = $_SERVER['REMOTE_ADDR'];

	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
	if(intval($responseKeys["success"]) !== 1) {

		// Spam
		wp_redirect( home_url() . '/sorry' );

	} else {

		//get form elements and email
		$name = $_POST['name'];
		$email = $_POST['email'];
		$enq = $_POST['details'];

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
									<p style="margin-bottom: 10px; font-size: 22px; font-weight: bold; color: #494a48; font-family: arial; line-height: 110%; text-align: center;">Riley Bathurst Enquiry</p>
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

		wp_redirect( home_url() . '/thanks' );

	} // closes out sucessful captcha

	exit();
} // closes out the prefix_admin_contact

add_action( 'admin_post_contact', 'prefix_admin_contact' );
add_action( 'admin_post_nopriv_contact', 'prefix_admin_contact' );