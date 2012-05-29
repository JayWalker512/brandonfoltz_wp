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
	<h1><a href="#">Brandon Foltz</a></h1>
	<h2>is a developer</h2>
</div> <!-- end of logo -->

<div id="header">
	<div id="navigation">
		<ul>
			<li><a href="">Nav items here</a></li>
		</ul>
	</div> <!-- end of navigation -->
</div> <!-- end of header -->
