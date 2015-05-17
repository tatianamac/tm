<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

	<div id="content">
		<div id="inner-content">
                <div class="inner-section work-cont">
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
                                        <h6><?php the_field('work_cta'); ?><div class="fa fa-angle-double-right"></div></h6>
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
                        <svg  viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet" >
                            <text class="page-bg-svg" x="0" y="20">work.</text>
                        </svg>
                    </div>
                </div>
            <div class="clearfix"></div>
	    </div><!--#inner-content-->
	</div><!--#content-->

<?php get_footer(); ?>
