<? 
define('WP_USE_THEMES', false);
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
