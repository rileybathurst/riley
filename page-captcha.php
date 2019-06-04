<?php
/*
Template Name: Captcha
*/
?>

<!DOCTYPE html><html>
  <head>
	<title>Google recapcha v3 demo - Codeforgeek</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://www.google.com/recaptcha/api.js?render=6LdE9aYUAAAAAEI0gH7nm-bZImKXUSnbzgHCchNU"></script>
  </head>
  <body>
	<h1>Google reCAPTHA Demo</h1>
	<form id="comment_form" action="<?php echo esc_url( home_url( '/' ) ); ?>form.php" method="post" >
	  <input type="email" name="email" placeholder="Type your email" size="40"><br><br>
	  <textarea name="comment" rows="8" cols="39"></textarea><br><br>
	  <input type="submit" name="submit" value="Post comment"><br><br>
	</form>
	  <script>
	   // when form is submit
	$('#comment_form').submit(function() {
		// we stoped it
		event.preventDefault();
		var email = $('#email').val();
		var comment = $("#comment").val();
		// needs for recaptacha ready
		grecaptcha.ready(function() {
			// do request for recaptcha token
			// response is promise with passed token
			grecaptcha.execute('6LdE9aYUAAAAAEI0gH7nm-bZImKXUSnbzgHCchNU', {action: 'create_comment'}).then(function(token) {
				// add token to form
				$('#comment_form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
					$.post("../form.php",{email: email, comment: comment, token: token}, function(result) { // i dont like the form being at the top of the site not in the theme
							console.log(result);
							if(result.success) {
									alert('Thanks for posting comment.')
							} else {
									alert('You are spammer ! Get the @$%K out.')
							}
					});
			});;
		});
  });
  </script>
  </body>
</html>


<?php get_footer(); ?>
