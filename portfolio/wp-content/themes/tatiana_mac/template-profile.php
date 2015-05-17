<?php /* Template Name: Profile */ ?>

<?php get_header(); ?>

			<div id="content">
				<div id="inner-content">
                    <?php
                    while ( have_posts() ) : the_post(); ?>
                    <section>  
                        <div class="inner-section profile-cont">
                            <div class="content-body">                                       
                                <?php if($post->ID == 9){ //profile ?>
                                <div>
                                    <?php the_content(); ?>
                                </div>
                                    <?php 
                                    if( get_field('social_link') ){ ?>
                                    <ul class="profile-links">
                                        <?php
                                        while( has_sub_field('social_link') ){ 
                                        $icon_shortcode = get_sub_field('icon_shortcode');
                                        $link_label = get_sub_field('link_label');$link_label = get_sub_field('link_label');
                                        $link_url = get_sub_field('link_url'); ?>
                                        <li><a class="fa <?php echo $icon_shortcode; ?>" href="<?php echo $link_url; ?>" target="_blank"></a></li>
                                        <?php
                                        } ?>
                                    </ul>
                                    <?php
                                    } ?>
                                <?php } else { //other sections ?>
                                <?php the_content(); ?>
                                <?php } ?>
                                <div class="clearfix"></div>
                            </div> 
                            <div class="page-bg">
                                <svg  viewBox="0 -5 100 100" preserveAspectRatio="xMidYMid meet" >
                                    <text class="page-bg-svg" x="0" y="20">profile</text>
                                </svg>
                            </div>
                        </div>
                    </section>
                    <?php
                    endwhile; //resetting the page loop
                    wp_reset_query(); //resetting the page query
                    ?>			    
                </div><!--#inner-content-->
		    </div><!--#content-->

<?php get_footer(); ?>
