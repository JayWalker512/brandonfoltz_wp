<? get_header() ?>

<div id="wrap">
	<div id="wrap-btm">
		<div id="main">
			<div id="content">
			<div class="post">
				<h2>some title text</h2>
				<img src="<?php echo get_stylesheet_directory_uri() ?>/img/hexapic2.png" width="300" height="224" class="aright" title="Photo by Matt Catron" alt="Office Photo"/>
				<p>nifty body text</p>

				<!-- thinking the above section and the "news" sections should be in separate "post" type divs. 
				and then separated with a "clearer" type div as below. Speaking of that, define a "clearer" class	
				in style.css as below. -->

				<div style="clear: both;">&nbsp;</div> 

				<h2>News</h2>
				<div class="separator"></div>
				<p>news goes here</p>
			</div>
			</div> <!-- end of content -->
		
			<!-- start sidebar -->
			<div id="sidepanel">
				<? get_sidebar() ?>
			</div> <!-- end sidebar -->
		
		<div style="clear: both;">&nbsp;</div>
		
		</div> <!-- end of main -->
	
	</div> <!-- end of wrap -->
</div> <!-- end of wrap-btm -->

<? get_footer() ?>
