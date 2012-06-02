<? 
define('WP_USE_THEMES', false);
get_header(); 
?>

<div id="wrap">
	<div id="wrap-btm">
		<div id="main">
			<div id="content">
				<!-- <div class="post">
					<h2>some title text</h2>
					<img src="<? echo get_stylesheet_directory_uri() ?>/img/hexapic2.png" width="300" height="224" class="aright" title="Photo by Matt Catron" alt="Office Photo"/>
					<p>nifty body text</p>
				</div> <!-- end of post -->
			
				<div class="clearer"></div> 

				<!-- let's start the loop here for now. -->
				<? $postCount = 0; ?>
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); $postCount++; ?>

				<div class="post">
					<h2 class="title"><?php the_title(); ?></h2>
					
					<? if ( is_page() == False ) : ?>
					<div class="meta"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></div>
					<? endif; ?>
					
					<div class="entry">
					<? the_content() ?>
					</div>
					
					<? if ( is_page() == False ) : ?>
					<div class="footer">
					<span>Posted in <? the_category(', ') ?></span>
					</div>
					<? endif; ?>
					
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
