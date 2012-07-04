<? 
get_header(); 
?>

<div id="wrap">
	<div id="wrap-btm">
		<div id="main">
			<div id="content">
				
				<!-- let's start the loop here for now. -->
				<? $postCount = 0; ?>
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); $postCount++; ?>

				<div class="post">
					<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					<div class="meta"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></div>
					
					<div class="entry">
					<? the_content() ?>
					</div>
					
					<!-- for images that extend beyond text. We want them to
					display nicely and not run over stuff. -->
					<div class="clearer"></div>
					
					<? if ( is_page() == False ) : ?>
					<div class="footer">
					<span>Posted in <? the_category(', ') ?></span>
					</div>
					<? endif; ?>
					
				</div>
				
				<!-- in case you didn't notice, the general "post" class is used 
				for just about anything that needs to be aligned properly inside
				the content div. -->
				<div class="separator"></div>
				<div class="post">
				<span class="alignright"><? 
				next_post_link();
				?></span>
				<span class="alignleft"><?
				previous_post_link();
				?></span>
				</div>
				
				<br/><br/>
				<!-- google ad -->
				<center><script type="text/javascript"><!--
				google_ad_client = "ca-pub-6838771997101702";
				/* brandonfoltz comment ad */
				google_ad_slot = "6003873166";
				google_ad_width = 468;
				google_ad_height = 60;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script></center>

				<div class="clearer"></div>
				<div class="separator"></div>
				
				<div class="post">
				<? 
				$withcomments=1;
				comments_template();
				?>
				</div>
			
				<? endwhile; else: ?>
				<div class="post">
					<p>Sorry, no posts matched your criteria.</p>
				</div>
				<? endif; ?>
				<!-- end of loop -->
			
			</div> <!-- end of content -->
		
			<!-- start sidebar -->
			<? get_sidebar() ?>
			<!-- end sidebar -->
		
		<div class="clearer"></div>
		
		</div> <!-- end of main -->
	
	</div> <!-- end of wrap -->
</div> <!-- end of wrap-btm -->

<? get_footer() ?>
