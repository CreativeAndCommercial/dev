<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Chai
 * @since Chai 1.0
 */
?>
<!-- Footer -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-inline pull-left hidden-xs">
          <li><a href="#">Terms and Conditions</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Accessibility</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
        <ul class="list-inline pull-right hidden-xs">
          <li><a href="#">Jobs</a></li>
          <li><a href="#">FAQ's</a></li>
          <li><a href="#">Appointments</a></li>
        </ul>
        <p class="copyright clearfix">&copy; Chai Cancer Ltd 2014 <span class="hidden-xs">|</span> <span>Registered Charity number 1078956</span></p>
      </div>
    </div>
  </div>
</footer>
<!-- Le javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lazyload.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map-config.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/pin-config.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map-interact.js" type="text/javascript"></script>
<script type="text/javascript">
var xpos, ypos;
$(function() {
  $("img.lazy").lazyload({
      threshold : 200,
      effect: "fadeIn"
  });
  $('circle').hover(function() {
      $('span#custom-map-tip').html($('span#map-tip').html());
      var offsetPointer = $(this).offset();
      $('span#custom-map-tip').css({left:(offsetPointer.left-30)+'px', top:(offsetPointer.top - 50 -$('#custom-map-tip').height())+'px'});
      $('span#custom-map-tip').fadeIn();
      console.log($(this).attr('cx')+ ' '+$(this).attr('cy'));

  } , function() {
      $('span#custom-map-tip').delay(500).fadeOut();
  });
  $('circle').hover(function() {
    $('circle').each(function() {
        $(this).css({'fill':'rgb(255, 153, 0)', 'stroke': 'rgba(255, 153, 0, 0)', "stroke-width":'1'});
    });
    // console.log($('span#custom-map-tip').attr('left'));
    // console.log($('span#custom-map-tip').attr('top'));
    $(this).css({'fill':'rgb(45, 53, 142)', 'stroke': 'rgba(255, 153, 0, 0.5)', "stroke-width":'15', "r":4});
  }, function() {
       $(this).css({'fill':'rgb(255, 153, 0)', 'stroke': 'rgba(255, 153, 0, 0)', "stroke-width":'1'});
  });
  $('.filter select').first().change(function() {

     var val = $(this).val();
     $('circle#map_points_'+val).trigger('mouseover').css({'fill':'rgb(45, 53, 142)', 'stroke': 'rgba(255, 153, 0, 0.5)', "stroke-width":'15', "r":4});
     setTimeout(
      function() 
      {
          $('span#custom-map-tip').fadeOut(300);
          $('circle#map_points_'+val).css({'fill':'rgb(255, 153, 0)', 'stroke': 'rgba(255, 153, 0, 0)', "stroke-width":'1'});
  
      }, 5000);
  });
});

</script>
<?php wp_footer(); ?>
</body>
</html>


