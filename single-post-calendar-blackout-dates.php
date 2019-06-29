<?php get_header();

if (have_posts()) {
	while (have_posts()) : the_post();

	get_template_part( 'template-parts/post/specific-top' ); ?>

	<div class="article-content-specific">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<pre class="wp-block-code"><code class="language-js">
&lt;form action="&lt;?php echo esc_url( admin_url('admin-post.php') ); ?>" enctype="multipart/form-data" method="post" novalidate="" data-abide="">

  &lt;input name="action" type="hidden" value="black" />
  &lt;input name="data" type="hidden" value="blackid" />

  &lt;!-- take the mysql database and turn it into a single string that I can then drop into the datepicker for blacout dates -->
  &lt;?php $array = $wpdb get_col( "SELECT dates FROM jkb_blackout;" );
	$string = '';

	foreach ($array as $key =&gt; $value) {
	  $string .= ",$value";
	} ?>

  &lt;script type="text/javascript">
	var disdates = &lt;?=json_encode($string);?>
	jQuery(document).ready(function($){
	  jQuery('#dates').datepicker({
		dateFormat : 'yy-mm-dd',&lt;br />
		onSelect: function(dateText, inst) {
		$("input[name='dates']").val(dateText);
		},
		beforeShowDay: function(date){
		  var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
		  return [ disdates.indexOf(string) == -1 ]
		}
	  });
	});
  &lt;/script>

  &lt;div class="row">
	&lt;div class="small-12 medium-9 medium-push-3 columns">
	  &lt;div id="dates">&lt;/div>
	  &lt;input name="dates" type="hidden" value="dates" />
	&lt;/div>
  &lt;/div>
  &lt;div class="row">
	&lt;div class="alert callout" style="display: none;" data-abide-error="">
	  &lt;i class="fi-alert">&lt;/i> There are some errors in your form.
	&lt;/div>
  &lt;/div>
  &lt;div class="row">
	&lt;div class="show-for-medium medium-3 columns">&lt;/div>
	&lt;div class="small-12 medium-9 columns">&lt;button type="submit">Submit&lt;/button>&lt;/div>
  &lt;/div>
&lt;/form>

Then the code for the functions.php file

&lt;?php
// deals with variable set through form _POST
// Blackout
function prefix_admin_black() {
  // deal with the upload
  if ( ! function_exists( 'wp_handle_upload' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
  }

  // Extremley Important to set
  global $wpdb;

  // Whats inserted
  $wpdb-&gt;insert( jkb_blackout ,
  array(
  'dates' =&gt; $_POST['dates']
  )
  );

  // this give the unid in the next url
  $id = $wpdb-&gt;insert_id;

  // fail safe if above zero was inserted to database
  if ($id&gt;0) {
	wp_redirect( home_url() . '/black' );
  } else {
	wp_redirect( home_url() . '/sorry' );
  }
  exit();
}
add_action( 'admin_post_black', 'prefix_admin_black' );
add_action( 'admin_post_nopriv_black', 'prefix_admin_black' ); ?>
				</code></pre>

			</div>
		</div>
		</div> <!-- .article-content-specific -->

	<?php get_template_part( 'template-parts/post/specific-bottom' );

	endwhile;
}

get_footer(); ?>
