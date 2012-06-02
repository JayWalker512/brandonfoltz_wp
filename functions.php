<?

/* This bit allows custom editable menus in the theme. */
add_theme_support('menus');
function home_page_menu_args( $args ) 
{
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

/* This is to change the [...] text at the end of the_excerpt() calls. */
function new_excerpt_more( $more ) {
	return "...";
}
add_filter('excerpt_more', 'new_excerpt_more');

/* Registers a sidebar so we can edit it via widget menu. */
if ( function_exists('register_sidebar') )
    register_sidebar();

?>
