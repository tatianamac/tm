<?php /* Template Name: Thoughts */ ?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">
                    
                    <section>
                       
                        <div class="inner-section thoughts-cont">
                            <div class="content-body">
                                <?php
                                global $post;
                                $thoughts = new WP_Query();
                                $thoughts->query('posts_per_page=-1');
                                if ( $thoughts->have_posts() ) : while ( $thoughts->have_posts() ) : $thoughts->the_post(); ?>
                                <h2><?php the_title(); ?></h2>
                                <div class="breakline"></div>
                                <?php the_excerpt(); ?>
                                <div class="thoughtlink"><a href="<?php echo the_permalink(); ?>"><?php if(get_field('cta_headline')){echo get_field('cta_headline');} else{echo "Read More ";}?></a></div>
                                <?php endwhile; endif;  wp_reset_query(); //wp_reset_postdata();  ?>
                            </div>
                            <div class="page-bg">
                                <svg  viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet" >
                                    <text class="page-bg-svg" x="0" y="20">Thoughts</text>
                                </svg>
                            </div>

                        </div>
                    </section>
                    
			    </div><!--#inner-content-->
		    </div><!--#content-->

<?php get_footer(); ?>
