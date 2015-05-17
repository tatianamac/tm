<?php /* Template Name: single-work */ ?>
<?php get_header(); ?>

<script>
jQuery(document).ready(function($) {   
	
	$('.wp-caption-text').each(function(){
		var imgTitle = $(this).parent().find("img").attr("title");
		
		//$(this).insertAfter($(this).parent());
		
		$(this).parent().after("<div class='imgCaption'><div class='insertedImgTitle'>" + imgTitle +"</div><div class='insertedImgText'>" + $(this).text() + "</div></div>");
		
		
		$(this).after("<div class='insertedImgInnerTitle'>" + imgTitle +"</div>").remove();
	})
	

});
</script>
			<div id="content">
				<div id="inner-content" class="single-content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                	<div class="content-body">    
                    	<article id="<?php the_ID(); ?>">
                    	    <section class="singleSection">
                    	        <!--
                    	            <header class="singleHeader" role="banner">
                    	                <nav role="navigation singleNav">
                    	                
                    	                    <div class="singleNavItem"><div id="workLink" class="singleNavItemLink">WORK</div></div>
                    	                    <div class="singleNavItem"><div id="thoughtsLink" class="singleNavItemLink">THOUGHTS</div></div>
                    	                    <div class="singleNavItem"><div id="profileLink" class="singleNavItemLink">PROFILE</div></div>
                    	                
                    	                </nav>
                    	            </header>
                    	            -->
                    	        <div class="singleBody">
                    	            <div class="singleTitle"><?php the_title(); ?></div>
                    	            <div class="singleContent"><?php the_content(); ?></div>
                    	            <div class="singleImage">
                    	                <?php 
                    	                /*
                    	                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    	                        //the_post_thumbnail('full');
                    	                        
                    	                        echo get_the_title();
                    	                        if(get_field('subheadline')){the_field('subheadline');}
                    	                        
                    	                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
                    	                        echo $src[0]; //the url
    	
                    	                    } 
                    	                */
                    	                ?>
                    	            </div><!--.singleImage-->
                    	            <div class="bottomSocialContainer">
                    	                <script type="text/javascript">
											function fbs_click(width, height, social) {
												var leftPosition, topPosition;
												//Allow for borders.
												leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
												//Allow for title and status bars.
												topPosition = (window.screen.height / 2) - ((height / 2) + 50);
												var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
												//u=location.href;
												//t=document.title;
												if(social == "fb"){
													
													window.open('http://www.facebook.com/sharer.php?s=100&p[title]=<?php print urlencode( html_entity_decode( get_the_title() ) ); ?>&p[url]=<?php the_permalink(); ?>','sharer', windowFeatures);
												}
												else if(social == "tw"){
													window.open('http://twitter.com/home?status=<?php print urlencode( html_entity_decode( get_the_title() ) ); ?>+<?php the_permalink(); ?>','sharer', windowFeatures);
												}
												return false;
											}
										</script>
                    	                <a id="fb-share" style='text-decoration:none;' type="icon_link" onClick="return fbs_click(580, 325, 'fb')" href="javascript: void(0)"><div class="facebookSocial bottomSocial"><i class="fa fa-facebook"></i></div></a>
                    	                <a id="tw-share" style='text-decoration:none;' type="icon_link" onClick="return fbs_click(580, 325, 'tw')" href="javascript: void(0)"><div class="twitterSocial bottomSocial"><i class="fa fa-twitter"></i></div></a>
                    	                <a href="mailto:?subject=<?php print str_replace("+", " ",urlencode( html_entity_decode( get_the_title()))); ?> via tatianamac.com&amp;body=<?php the_permalink(); ?>"><div class="emailSocial bottomSocial"><i class="fa fa-envelope"></i></div></a>
                    	            </div><!--.bottomSocialContainer-->
                    	            <?php
                    	                $prevId = get_previous_post()->ID;
                    	                $nextId = get_next_post()->ID;
                    	                if(empty($prevId)){
                    	                    if(empty($nextId)){
                    	                        //echo "No other posts to show";
                    	                    }
                    	                    else{
                    	                        echo '<div class="bottomLink"><a href="' . get_permalink($nextId) . '" class="adjPostLink"><div class="cycle-next fa fa-angle-double-right"></div><div class="adjPostDesc">Next Post</div><div class="adjPost">' . get_the_title($nextId) . '</div></a></div>';
                    	                    }
                    	                }
                    	                else{
                    	                    echo '<div class="bottomLink"><a href="' . get_permalink($prevId) . '" class="adjPostLink"><div class="cycle-next fa fa-angle-double-right"></div><div class="adjPostDesc">Previous Post</div><div class="adjPost">' . get_the_title($prevId) . '</div></a></div>';
                    	                }
                    	            ?>
                    	        </div><!--.singleBody-->
                    	        <!-- FB 'like' not customisible. -->
                    	        <!-- Put the text to be highighted in italics. Deal with it via styling -->
                    	    </section><!--.singleSection-->
                    	</article>
					</div><!--.content-body-->
					<div class="page-bg">
					    <?php if(get_field('background_image')) { ?>                                        
                        <img src="<?php the_field('background_image'); ?>"> 
                        <?php } ?>
                    </div>
                    <?php endwhile; ?>
					<?php else : ?>
					<div class="content-body">
						<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
								<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>
					</div>
					<?php endif; ?>
                    <div class="clearfix"></div>
				</div><!--.inner-content-->
			</div><!--.content-->

<?php get_footer(); ?>
