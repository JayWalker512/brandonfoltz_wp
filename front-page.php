<? 	
get_header(); 
?>

<!-- this page is incredibly hacked together, as far as getting the separators 
to show in the proper location, as well as displaying static content and recent
posts. Geez Wordpress, y u so weird? -->

<div id="wrap">
	<div id="wrap-btm">
		<div id="main">
			<div id="content">
				
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<h2 class="title"><?php the_title(); ?></h2>
					
					<? if ( is_page() == False ) : ?>
					<div class="meta"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></div>
					<? endif; ?>
					
					<div class="entry">
					<? the_content() ?>
					</div>

				</div>				
				<? endwhile; endif; ?>

				<div class="post">
				<h2>Recent Posts</h2>
				</div>
				<!-- let's start the (second) loop (for posts) here for now. -->
				<? 
				$postCount = 0; 
				query_posts('post_type=post') //fixes the issue of posts not showing
				?>
				<? if ( have_posts() ) : while ( have_posts() ) : the_post(); $postCount++; ?>

				<div class="post">
				<div class="separator"></div> 
					<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					<? if ( is_page() == False ) : ?>
					<div class="meta"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></div>
					<? endif; ?>
					
					<div class="entry">
					<? the_excerpt() ?>
					</div>
					
					<? if ( is_page() == False ) : ?>
					<div class="footer">
					<span>Posted in <? the_category(', ') ?></span>
					<span class="alignright">
					<img src="<? echo get_bloginfo( 'stylesheet_directory' )."/img/comments4.png"; ?>"/>
					&nbsp;
					<a href="<? comments_link()?>"><? comments_number(); ?></a>
					</span>
					</div>
					<? endif; ?>
				</div>
			
				<? //if ( $postCount < sizeof($posts) ) : //seems like a hackish fix ?>
				<!-- <div class="separator"></div> -->
				<? //endif; ?>
			
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
