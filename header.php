<? define('WP_USE_THEMES', false); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- normal stylesheet -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen and (min-device-width: 481px)" />

<!-- mobile stylesheet(s) -->
<link type="text/css" rel="stylesheet" media="only screen and (max-device-width: 480px)" href="<?php bloginfo( 'stylesheet_directory' ); ?>/mobile.css" />
<link type="text/css" rel="stylesheet" media="handheld" href="<?php bloginfo( 'stylesheet_directory' ); ?>/mobile.css" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!-- google analytics tracker code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26004647-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="logo">
	<h1><a href="<? bloginfo('url') ?>">Brandon Foltz</a></h1>
	<? require_once 'RandomQuote.class.php';
	$headerquote = new RandomQuote();
	$quoteFilePath = get_bloginfo('stylesheet_directory').'/headerquotes';
	echo "<h2>".$headerquote->GetQuote($quoteFilePath)."</h2>"; ?>
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
