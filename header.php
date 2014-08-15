<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title ( '|', true,'right' ); ?></title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<div id="navwrap">
<?php
          wp_nav_menu( array(
    'theme_location' => 'main-menu', // Setting up the location for the main-menu, Main Navigation.
    'menu_class' => 'dropdown', //Adding the class for dropdowns
    'container_id' => 'navwrap', //Add CSS ID to the containter that wraps the menu.
    'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
    )
      );
?>
</div>
<?php
    /*
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    wp_head();
     
    wp_get_archives('type=monthly&format=link');
?>
</head>

<body  <?php body_class(); ?> >

<div id="wrapper">
    <div id="header">
<!-- Below is for header-image -->
<!-- img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->
		
<center>
<hgroup>
			<h1 class="entry-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h3 class="h3entry-title"><?php bloginfo( 'description' ); ?></h3>
		</hgroup>
</center>    
</div>
