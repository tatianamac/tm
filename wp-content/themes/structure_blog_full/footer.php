<!-- begin footer -->

<div style="clear:both;"></div>

<div id="footertopbg">

    <div id="footertop">
        
            <div class="footertopleft">
            	<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?>
                <?php endif; ?>
                </ul>
            </div>
            
            <div class="footertopmidleft">
            	<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Left') ) : ?>
                <?php endif; ?>
                </ul>
            </div>
            
            <div class="footertopmidright">
            	<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Right') ) : ?>
                <?php endif; ?>
                </ul>
            </div>
            
            <div class="footertopright">
            	<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>
                <?php endif; ?>
                </ul>
            </div>
            
    </div>

</div>

<div id="footerbg">

	<div id="footer">
    
    	<div class="footerleft">
            <div class="footertop">
                <p><?php _e("Copyright", 'structuretheme'); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e("All Rights Reserved", 'structuretheme'); ?> &middot; <?php bloginfo('name'); ?></p>
            </div>
            
            <div class="footerbottom">
                <p><a href="http://www.structuretheme.com" target="_blank"><?php _e("The Structure Theme", 'structuretheme'); ?></a> <?php _e("by", 'structuretheme'); ?> <a href="http://www.mukustudios.com" target="_blank"><?php _e("Muku Studios", 'structuretheme'); ?></a> <?php _e("and", 'structuretheme'); ?> <a href="http://www.jeffmilone.com" target="_blank"><?php _e("Jeff Milone", 'structuretheme'); ?></a> &middot; <a href="http://feeds.feedburner.com/structuretheme" target="_blank">RSS Feed</a> &middot; <?php wp_loginout(); ?></p>
            </div>
        </div>
        
        <div class="footerright">
    	</div>
		
	</div>
	
</div>

</div>

<?php do_action('wp_footer'); ?>

</body>
</html>