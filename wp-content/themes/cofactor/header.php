<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo get_the_title(); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-310.png" />
    <link href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
	<link href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
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
                <?php if( get_field('facebook_link', 5) ): ?><li><a class="social__media--facebook" href="<?php the_field('facebook_link', 5); ?>" target="_blank"></a></li><?php endif; ?>
                <?php if( get_field('twitter_link', 5) ): ?><li><a class="social__media--twitter" href="<?php the_field('twitter_link', 5); ?>" target="_blank"></a></li><?php endif; ?>
                <?php if( get_field('linkedin_link', 5) ): ?><li><a class="social__media--linkedin" href="<?php the_field('linkedin_link', 5); ?>" target="_blank"></a></li><?php endif; ?>
                <?php if( get_field('google_plus_link', 5) ): ?><li><a class="social__media--google" href="<?php the_field('google_plus_link', 5); ?>" target="_blank"></a></li><?php endif; ?>
                <?php if( get_field('email_address', 5) ): ?><li><a class="social__media--email" href="mailto:<?php the_field('email_address', 5); ?>" target="_blank"><?php the_field('email_address', 5); ?></a></li><?php endif; ?>
                <!--<?php if( get_field('phone_number', 5) ): ?><li><a class="social__media--phone" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/icons/phone.svg" alt="telephone"/><span><?php the_field('phone_number', 5); ?></span></a></li><?php endif; ?>-->
            </ul>
            <div class="topbar--paypal">
            	  <!--<p>Pay via</p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="anna@cofactorscience.com">
                <input type="hidden" name="lc" value="GB">
                <input type="hidden" name="item_name" value="Anna Sharman - Cofactor">
                <input type="hidden" name="button_subtype" value="services">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="GBP">
                <input type="hidden" name="bn" value="PP-BuyNowBF:paypal.svg:NonHostedGuest">
                <input type="image" style="width:69px;height:20px;"  src="http://www.amparsons.co.uk/clients/cofactor/wp-content/themes/cofactor/assets/images/icons/paypal.svg" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                </form>-->
			 </div>
        </div>
    </div>
	
    <div class="container">     
        <div class="wrapper">
            <header>
				<a class="header__logo" href="<?php echo home_url( '/' ); ?>"></a>
				<nav class="mainnav">
					<?php wp_nav_menu( array('menu' => 'main-menu' )); ?>
				</nav>
            </header>
        </div>