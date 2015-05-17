<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
        
        <div class="postarea">
        
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="posttitle">
            <div class="postauthor">            
                        <p><?php _e("", 'structuretheme'); ?> <?php the_category(', ') ?> &middot; <?php the_time('F Y'); ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>
            </div>
            	<div class="commenticon">
                    <a href="<?php the_permalink(); ?>#comments" title="Comments"><?php comments_number('0', '1', '%'); ?></a>
                    <span></span>
                </div>
            
                <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            
                
            
            </div>
                    
			<?php the_content(''); ?>

			<div class="postmeta">
				<p><?php _e("Tagged with", 'structuretheme'); ?> <?php the_tags('') ?></p>
			</div>

        	<?php endwhile; else: ?>
			<p><?php _e("Sorry, no posts matched your criteria.", 'structuretheme'); ?></p>
			<?php endif; ?>
			
			<div id="prevLink"><p><?php previous_posts_link(); ?></p></div>
			<div id="nextLink"><p><?php next_posts_link(); ?></p></div>

        </div>

	</div>
    
    <?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<?php get_footer(); ?>