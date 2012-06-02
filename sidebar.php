<div id="sidebar1">
<div class="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
        
<h3>Archives</h3>
<ul>
	<? wp_get_archives( array( 'type' => 'monthly' ) ); ?>
</ul>

<h3>Categories</h3>
<ul>
	<? wp_list_categories( 'title_li=' ) ?>
</ul>

<? endif; ?>

<? wp_meta() ?>
</div>
</div>

			
			

