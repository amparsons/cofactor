<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" />
    
    <script type="text/javascript" src="//use.typekit.net/drr6tep.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<div id="container">

		<header>
			<a id="logo" href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
			<div class="description"><?php bloginfo( 'description' ); ?></div>
		</header>

		<nav>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
