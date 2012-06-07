<? 	
get_header(); 
?>

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
				<div class="clearer"></div>
				<div class="separator"></div> 
				<!-- let's start the (second) loop (for posts) here for now. -->
				<? 
				$local_posts_per_page = 4;
				query_posts('posts_per_page=5&post_type=post&posts_per_page='.$local_posts_per_page);
				$postCount = 0; 
				?>
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
				<? if ( $postCount < $local_posts_per_page ) : 
				?>
				<div class="clearer"></div>
				<div class="separator"></div> 
				<? endif; ?>
			
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
