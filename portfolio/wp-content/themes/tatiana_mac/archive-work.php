<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

	<div id="content" class="work-content">
		<div id="inner-content">
                <div class="inner-section">
                    <div class="content-body">
                        <?php
                        global $post;
                        $work = new WP_Query();
                        $work->query('posts_per_page=-1&post_type=work');
                        if ( $work->have_posts() ) : while ( $work->have_posts() ) : $work->the_post(); ?>                
    
                        <?php $work_featured_image = wp_get_attachment_url( get_post_thumbnail_id($work->ID) ); ?>
        
                        <div class="work-section">
                            <div class="work-excerpt">
                                <a href="<?php echo get_permalink(); ?>">
                                        <h4><?php the_title(); ?></h4>
                                        <div class="breakline"></div>
                                        <?php if(get_field('subheadline')) { ?>
                                        <h5><?php the_field('subheadline'); ?></h5>
                                        <?php } ?>
                                         <h6><a href="<?php echo the_permalink(); ?>"><?php if(get_field('cta_headline')){echo get_field('cta_headline');} else{echo "Read More";}?> &raquo;</a></h6>
                                </a>
                            </div>         
                            <div class="work-image">
                                <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $work_featured_image; ?>" alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                       </div>
                        <?php endwhile; endif;  wp_reset_query(); //wp_reset_postdata();  ?>
                    </div>               
                    <div class="page-bg">
                        <img src="<?php bloginfo('template_directory'); ?>/library/images/work_bg.png" alt="Work" />
                    </div>
                </div>
            <div class="clearfix"></div>
	    </div><!--#inner-content-->
	</div><!--#content-->

<?php get_footer(); ?>
