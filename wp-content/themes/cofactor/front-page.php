<?php get_header(); ?>

    <div class="cycle-slideshow" 
        data-cycle-fx=scrollHorz
        data-cycle-swipe=true
        data-cycle-slides="div.slide"
        data-cycle-prev="#prev"
        data-cycle-next="#next">
        <div class="cycle-pager"></div>
            <div class="slide"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/slide1.jpg" alt="Slide name"/></div>
            <div class="slide"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/slide2.jpg" alt="Slide name"/></div>
        </div>
    </div>

<div class"wrapper">
	<section id="main" role="main">
    
	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
