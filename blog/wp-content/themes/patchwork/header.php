<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Package
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>    <html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400|Oswald:400,300,700' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<!-- HEADER Section -->

<div class="headerStretch" id="top">
	<div class="headerWrap">
		<div class="centerContainer">
			
			<div id="banner" class="left">
				<h1>Patchwork Blog</h1>
				<span class="tagline">YOU ARE WHAT YOU CRAFT</span>
			</div>


			<!-- NAVIGATION -->
			<div class="nav">
				<ul id="links">
					<li><a href="<?php echo home_url( '/' ); ?>../#services">Services</a></li>
					<li><a href="<?php echo home_url( '/' ); ?>../#about">About</a></li>
					<li><a href="<?php echo home_url( '/' ); ?>../#contact">Contact</a></li>
					<li><a href="<?php echo home_url( '/' ); ?>">Blog</a></li>
				</ul>
			</div>
			<!-- END NAVIGATION -->



		</div> <!-- END CENTERCONTAINER -->
	</div> <!-- END HEADERWRAP -->
</div> <!-- END HEADERSTRETCH -->

<!-- END HEADER Section -->

<!-- BLOG Section -->
<div class="blogStretch" id="blog">
    <div class="blogWrap">
        <div class="centerContainer">
            
            <div class="headSection">
             </div>