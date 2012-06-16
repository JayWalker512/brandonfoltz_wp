<div id="sidebar1">
<div class="sidebar">
<ul>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
</ul>        

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

			
			

