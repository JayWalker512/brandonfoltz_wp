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
					
					<? if ( is_page() == False ) : ?>
					<div class="meta"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></div>
					<? endif; ?>
					
					<div class="entry">
					<? the_excerpt() ?>
					</div>
					
					<? if ( is_page() == False ) : ?>
					<div class="footer">
					<span class="alignleft">Posted in <? the_category(', ') ?></span>
					<span class="alignright">
					<img src="<? echo get_bloginfo( 'stylesheet_directory' )."/img/comments4.png"; ?>"/>
					&nbsp;
					<a href="<? comments_link()?>"><? comments_number(); ?></a>
					</span>
					</div>
					<? endif; ?>
				</div>
				<? if ( is_single() == False && 
				is_page() == False &&
				$postCount < sizeof($posts) &&
				$postCount > 1 ) : ?>
				<div class="clearer"></div> <!-- maybe separator should automatically clear? -->
				<div class="separator"></div>
				<? else: ?> <!-- fix for the separator showing incorrectly -->
				<div class="clearer"></div>
				<? endif; ?>
			
				<? endwhile; else: ?>
				<div class="post">
					<p>Sorry, no posts matched your criteria.</p>
				</div>
				<? endif; ?>
				<!-- end of loop -->
				
				<!-- in case you didn't notice, the general "post" class is used 
				for just about anything that needs to be aligned properly inside
				the content div. -->
				<!--<div class="separator"></div>--> <!-- need better testing for when separator should show -->
				<div class="post">
				<span class="alignleft"><? 
				next_posts_link('&laquo; Older Entries', 0); 
				?></span>
				<span class="alignright"><?
				previous_posts_link('Newer Entries &raquo;', 0);
				?></span>
				</div>
			
			</div> <!-- end of content -->
		
			<!-- start sidebar -->
			<? get_sidebar() ?>
			<!-- end sidebar -->
		
		<div class="clearer"></div>
		
		</div> <!-- end of main -->
	
	</div> <!-- end of wrap -->
</div> <!-- end of wrap-btm -->

<? get_footer() ?>
