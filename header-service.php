<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="en-US" xmlns:og="http://opengraphprotocol.org/schema/" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="en-US" xmlns:og="http://opengraphprotocol.org/schema/" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en-US" xmlns:og="http://opengraphprotocol.org/schema/" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" xmlns:og="http://opengraphprotocol.org/schema/" class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en-US" xmlns:og="http://opengraphprotocol.org/schema/" class="no-js"><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php echo THEMEROOT ?>/style.css" type="text/css" />  
  <?php wp_head();?>
<body> 
<header>
	<div class="container1">
		<a href="<?php echo site_url()?>"><div class="logo"></div></a>	
    <div class="title">
      <h1><?php echo the_title();?></h1>
    </div>
       <div class="theme"><span><a href="<?php echo site_url()?>" style="color:#9a8e55;font-weight:bold;">EN</a></span> / <span><a href="<?php echo'http://'.$_SERVER['SERVER_NAME']?>">AR</a></span></div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ,'container' => 'nav') ); ?>
    <div id="dl-menu" class="dl-menuwrapper">
      <button class="dl-trigger">Open Menu</button>
      <ul class="dl-menu">
        <li>
          <a href="<?php echo site_url()?>">Home</a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/about_us">About Us</a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/services">Services</a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/partners/">Partners</a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/blog">blog</a>
        </li>
      </ul>
    </div><!-- /dl-menuwrapper -->
  </div>
</header>