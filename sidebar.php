<div id="sidepanel">
<h3>Archives</h3>
<ul>
	<? wp_get_archives( array( 'type' => 'monthly' ) ); ?>
</ul>

<h3>Categories</h3>
<ul>
	<? wp_list_categories( 'title_li=' ) ?>
</ul>

<? wp_meta() ?>
</div>

			
			

