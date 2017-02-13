<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

            <div id="content" class="home-content">

                <div id="inner-content">

                    <?php
                    global $post;
                    $featured = new WP_Query();
                    $featured->query('posts_per_page=1&post_type=page&orderby=menu_order&order=asc');
                    if ( $featured->have_posts() ) : while ( $featured->have_posts() ) : $featured->the_post(); ?>
                    <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    
                   <section id="<?php echo $post->post_name; ?>" class="section" style="<?php if ($featured_image) { ?>background-image:url(<?php echo $featured_image; ?>);<?php } ?><?php if(get_field("background_color")) { ?>background-color:<?php the_field("background_color"); ?>;<?php } ?>" data-url="<?php the_field('mobile_image'); ?>" data-orig-url="<?php echo $featured_image; ?>">
                       
                        <div class="inner-section">
                                <?php the_content(); ?>
                                <!-- <div class="home-currently">
                                    <h6>currently</h6>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="home-currently-cont">
                                    <p><?php the_field("home_currently_1"); ?></p>                                
                                    <p><?php the_field("home_currently_2"); ?></p>
                                </div> -->
                        </div><!--.inner-section-->
                    </section>
                    <?php endwhile; endif;  wp_reset_query(); //wp_reset_postdata();  ?>
                </div><!--#inner-content-->
            </div><!--#content-->

<?php get_footer(); ?>