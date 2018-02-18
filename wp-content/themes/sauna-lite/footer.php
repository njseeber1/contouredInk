<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sauna Lite
 */
?>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <div id="sauna-footer">
    	<div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-1');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-2');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-3');?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php dynamic_sidebar('footer-4');?>
                </div>
            </div>
        </div>
    </div>
	<div class="clearfix"></div> 
    <div class="copyright">
        <p>
        <?php echo esc_html(get_theme_mod('sauna_lite_footer_copy',__('Sauna WordPress Theme By','sauna-lite'))); ?>        
         <a href="www.facebook.com" style="margin:5px auto"><i style="color:white;" class="fab fa-facebook-f fa-2x"></i></a>
         <a href="www.twitter.com" style="margin:5px auto"><i style="color:white" class="fab fa-twitter fa-2x"></i></a>
         
        </p>
    </div>
    <div class="clear"></div>
    <?php wp_footer(); ?>
  </body>
</html>