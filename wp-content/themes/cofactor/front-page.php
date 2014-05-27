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
 
    <div class="wrapper">
        <section id="main" role="main">
            <h1>We are a UK company who help scientific researchers to publish their research by providing expert advice and editorial support. We're the experts in new developments in scientific publishing. We can help you make the most of the opportunities these provide.</h1>
            <a class="content__link" href="#">FIND OUT MORE <span>+</span></a>
            <div class="feature__boxes">
                <article class="feature__boxes--first feature__boxes--colone">
                    <a href="<?php bloginfo('url'); ?>/workshops/">
                    	<figure>
                    		<img src="<?php the_field('workshop_featute_image'); ?>" alt="Slide name"/>
                    		<figcaption><?php the_field('workshot_title'); ?></figcaption>
                    	</figure>
                    	<h1><?php the_field('workshop_sub_heading'); ?></h1>
                    	<p><?php the_field('intro_text'); ?></p>
                    	<span>More <strong>+</strong></span>
                    </a>
                </article>
                <article class="feature__boxes--second feature__boxes--coltwo">
                    <a href="<?php bloginfo('url'); ?>/editorial-help/">
                    	<figure>
                    		<img src="<?php the_field('editorial_feature_image'); ?>" alt="Slide name"/>
                    		<figcaption><?php the_field('editorial_title'); ?></figcaption>
                    	</figure>
                    	<h1><?php the_field('editorial_sub_title'); ?></h1>
                    	<p><?php the_field('editorial_intro_text'); ?></p>
                    	<span>More <strong>+</strong></span>
                    </a>
                </article>
                <article class="feature___boxes--third feature__boxes--colthree">
                    <a href="<?php bloginfo('url'); ?>/journal-selector/">
                    	<figure>
                    		<img src="<?php the_field('journal_feature_image'); ?>" alt="Slide name"/>
                    		<figcaption><?php the_field('journal_selector_title'); ?></figcaption>
                    	</figure>
                    	<h1><?php the_field('journal_selector_sub_title'); ?></h1>
                    	<p><?php the_field('journal_intro'); ?></p>
                    	<span>More <strong>+</strong></span>
                    </a>
                </article>
			</div>
 
        </section> <!-- /#main -->
		 
    </div> <!-- /.wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
