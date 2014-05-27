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
	       
    <div class="topbar">
        <div class="wrapper">
            <ul class="social__media">
                <?php if( get_field('facebook_link', 5) ): ?><li><a class="social__media--facebook" href="<?php the_field('facebook_link', 5); ?>"></a></li><?php endif; ?>
                <?php if( get_field('twitter_link', 5) ): ?><li><a class="social__media--twitter" href="<?php the_field('twitter_link', 5); ?>"></a></li><?php endif; ?>
                <?php if( get_field('linkedin_link', 5) ): ?><li><a class="social__media--linkedin" href="<?php the_field('linkedin_link', 5); ?>"></a></li><?php endif; ?>
                <?php if( get_field('google_plus_link', 5) ): ?><li><a class="social__media--google" href="<?php the_field('google_plus_link', 5); ?>"></a></li><?php endif; ?>
                <?php if( get_field('phone_number', 5) ): ?><li><a class="social__media--phone" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/icons/phone.svg" alt="telephone"/><span><?php the_field('phone_number', 5); ?></span></a></li><?php endif; ?>
            </ul>
            <p class="topbar--paypal">Pay <a href="#">here</a> via <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/icons/paypal.svg" alt="telephone"/></p>  
        </div>
    </div>
	
    <div class="container">     
        <div class="wrapper">
            <header>
				<a class="header__logo" href="<?php echo home_url( '/' ); ?>"></a>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav>
            </header>
        </div>