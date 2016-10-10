<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/talentedunderachiever-master/wp-content/uploads/2016/10/09214323/mini-avatar.png" data-pin-nopin="true">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<?php wp_head(); ?>
		<script src="https://use.typekit.net/ykl1zpm.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body>
		<script
		    type="text/javascript"
		    async defer
		    src="//assets.pinterest.com/js/pinit.js"
		></script>
		<div class="title-bar" data-responsive-toggle="mc-menu" data-hide-for="medium">
		  <button class="menu-icon" type="button" data-toggle></button>
		  <div class="title-bar-title"><img src="/assets/img/yellow-logo.png"></div>
		</div>

		<div class="top-bar" data-topbar id="mc-menu">
		    <div class="top-bar-left">
		      <ul class="dropdown menu" data-dropdown-menu>
		          <li class="hide-for-small-only"><a href="/"><img src="/assets/img/yellow-logo.png"></a></li>
		          <li class="menu-text hide-for-small-only"><a href="/">SproutKit</a></li>
		          <li><a href="/work">Our Work</a></li>
		          <li><a href="/blog">Blog</a></li>
		      </ul>
		    </div>
		    <div class="top-bar-right">
		      <ul class="menu">

		      </ul>
		    </div>
		</div>