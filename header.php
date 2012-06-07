<? define('WP_USE_THEMES', false); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body>

<div id="logo">
	<h1><a href="<? bloginfo('url') ?>">Brandon Foltz</a></h1>
	<h2>is a developer</h2>
</div> <!-- end of logo -->

<div id="header">
	<div id="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 
										'sort_column' => 'menu_order', 
										'container_class' => 'menu-header' ) ) ?>
		<span class="loginout-link">
		<? echo wp_loginout("", True) ?>
		</span>
	</div> <!-- end of navigation -->
</div> <!-- end of header -->
