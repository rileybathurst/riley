<footer class="site-footer">

    <?php wp_nav_menu( array(
      'theme_location'    => 'primary',
      'menu_class'        => 'footer_menu text-center',
    ) ); ?>

  <div class="footer_info">
    <div class="footer_copyright">
      <?php if(get_option('copyright') == 'on'){echo '&copy;'; } ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <?php $established = get_option('established'); ?>
      <?php echo get_option('established'); ?><?php if(date("Y")!=$established){ echo ' - '.date("Y"); } else { echo date("Y"); } ?>

    </div>
    <div class="footer_nav">
      <?php wp_nav_menu( array(
        'theme_location' => 'secondary',
        'menu_id'        => 'bottom-menu',
      ) ); ?>
    </div>
    <div class="footer_contact">
      <a href="mailto:<?php echo bloginfo ('admin_email'); ?>"><?php echo bloginfo ('admin_email'); ?></a>
      <!-- add a contact number to the theme -->
      <?php if (get_option('contact_phone')) {
        $unspaced_phone = str_replace(' ', '', get_option('contact_phone')); ?>
        <a href="tel:<?php echo $unspaced_phone; ?>"><?php echo get_option('contact_phone'); ?></a>
      <?php } ?>
    </div>
  </div>

</footer>

<script>
  // some variables have been used above in the laptop screen flipper
  var numSteps2 = 20.0;

  var spineElement;
  var prevRatio2 = 0.0;
  var mT = "ratio2em";

  // Set things up.

  window.addEventListener("load", function(event) {
    spineElement = document.querySelectorAll(".spine-border");

    createObserver2();
  }, false);

  function createObserver2() {
    var observer2;

    var options2 = {
      root: null,
      rootMargin: "0px",
      threshold: buildThresholdList2()
    };

    observer2 = new IntersectionObserver(handleIntersect2, options2);

    spineElement.forEach(spineElements => {
      observer2.observe(spineElements);
    });
  }

  function buildThresholdList2() {
    var thresholds2 = [];
    var numSteps2 = 100;

    for (var j=1.0; j<=numSteps2; j++) {
      var ratio2 = j/numSteps2;
      thresholds2.push(ratio2);
    }

    thresholds2.push(0);
    return thresholds2;
  }

   function handleIntersect2(entries, observer2) {
    entries.forEach(function(entry) {
      entry.target.style.marginTop = mT.replace("ratio2", (entry.intersectionRatio*5));
      prevRatio2 = entry.intersectionRatio;
    });
  }

</script>

<script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/what-input/dist/what-input.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/foundation-sites/dist/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

<?php wp_footer(); ?>

  </body>
</html>
