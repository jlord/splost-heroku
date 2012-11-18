<div id="footer">

  <div class="footerThird"><!-- one of the 3 columns in footer -->
    <h4>Built by Code for America in partnership with Macon, Georgia.</h4>
    <img src="/wp-content/themes/wp-splost/logos.png" width="275px" />
  </div>

  <div class="footerThird"><!-- one of the 3 columns in footer -->
    <h4>Stay in the Loop</h4>
      <h6>Twitter</h6>
        <h5><a href="https://twitter.com/mayorreichert" target="_blank">Mayor Reichert's Twitter</a></h5>
        <h5><a href="https://twitter.com/ChairmanHart" target="_blank">Chairman Hart's Twitter</a></h5>
      <h6>Facebook</h6>
        <h5><a href="http://www.facebook.com/mayorreichert" target="_blank">Mayor Reichert's Facebook</a></h5>
        <h5><a href="http://www.facebook.com/SamHartForChairman2012" target="_blank">Chairman Hart's Facebook</a></h5>
  </div>

  <div class="footerThird"><!-- one of the 3 columns in footer -->
    <h4>Latest Posts</h4>
      <?php // queries blog posts for the latest three posts
      $args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'post_date' );
      $postslist = get_posts( $args );
      foreach ($postslist as $post) :  setup_postdata($post); ?> 
      	<div class="oneLatestPost">
      		<h6><?php the_date(); ?></h6>
      		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      	</div>
      <?php endforeach; ?>
  </div>

</div><!-- #footer end -->

</div><!-- #pagewrapper end -->


<?php wp_footer(); ?>

<script type="text/javascript">
  //makes g+ button
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id="fb-root"></div>
<script>
  // makes facebook button
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>