<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <div class="posttitle">
            	<h2><?php the_title(); ?></h2>
            </div>
            
            <?php the_content(__('Read More'));?><div style="clear:both;"></div><?php edit_post_link('(Edit)', '', ''); ?>
            
            <?php endwhile; else: ?>
            
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            
        </div>
		
	</div>
			
<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>