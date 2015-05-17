<?php get_header(); ?>

<div id="content">

	<div id="contentleft">	

		<div class="postarea">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <div class="posttitle">		
<div class="commenticon">
                    <a href="<?php the_permalink(); ?>#comments" title="Comments"><?php comments_number('0', '1', '%'); ?></a>
                
                </div>
    <div class="postauthor">            
                        <p><?php _e("", 'structuretheme'); ?> <?php the_category(', ') ?> &middot; <?php the_time('F Y'); ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p> </div>
				<h2><?php the_title(); ?></h2>
                
                  
                    
            </div>

			<?php the_content(__('Read More'));?><div style="clear:both;"></div>
			<?php trackback_rdf(); ?>

			<div class="postmeta">
				<p><?php _e("Tagged with", 'structuretheme'); ?> <?php the_tags('') ?></p>
			</div>

		</div>

        <div class="postcomments">
			<?php comments_template('',true); ?>
        </div>

		<?php endwhile; else: ?>
		<p><?php _e("Sorry, no posts matched your criteria.", 'structuretheme'); ?></p>
		<?php endif; ?>

	</div>

<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>