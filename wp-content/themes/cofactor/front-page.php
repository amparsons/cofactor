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
<<<<<<< HEAD
<<<<<<< HEAD
                    <a href="<?php bloginfo('url'); ?>/workshops/">
                    	<figure>
                    		<img src="<?php the_field('workshop_featute_image'); ?>" alt="Slide name"/>
                    		<figcaption><?php the_field('workshot_title'); ?></figcaption>
                    	</figure>
                    	<h1><?php the_field('workshop_sub_heading'); ?></h1>
                    	<p><?php the_field('intro_text'); ?></p>
=======
=======
>>>>>>> FETCH_HEAD
                    <a href="#">
                    	<figure>
                    		<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/workshops.jpg" alt="Slide name"/>
                    		<figcaption>Workshops</figcaption>
                    	</figure>
                    	<h1>Scientific publishing is changing fast.</h1>
                    	<p>Scientific publishing is changing fast. Cofactor workshops help researchers at all levels understand these changes. Let an expert help you learn how to get published in journals, prepare your paper, and publicise your work.</p>
<<<<<<< HEAD
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
                    	<span>More <strong>+</strong></span>
                    </a>
                </article>
                <article class="feature__boxes--second feature__boxes--coltwo">
<<<<<<< HEAD
<<<<<<< HEAD
                    <a href="<?php bloginfo('url'); ?>/editorial-help/">
                    	<figure>
                    		<img src="<?php the_field('editorial_feature_image'); ?>" alt="Slide name"/>
                    		<figcaption><?php the_field('editorial_title'); ?></figcaption>
                    	</figure>
                    	<h1><?php the_field('editorial_sub_title'); ?></h1>
                    	<p><?php the_field('editorial_intro_text'); ?></p>
=======
=======
>>>>>>> FETCH_HEAD
                    <a href="#">
                    	<figure>
                    		<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/awaiting-image.jpg" alt="Slide name"/>
                    		<figcaption>EDITORIAL HELP</figcaption>
                    	</figure>
                    	<h1>Cofactor can improve your paper's chances of publication in the best venue.</h1>
                    	<p>Our editors can check or edit your paper or just the abstract. Our consultants can suggest the best journal and help you through peer review.</p>
<<<<<<< HEAD
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
                    	<span>More <strong>+</strong></span>
                    </a>
                </article>
                <article class="feature___boxes--third feature__boxes--colthree">
<<<<<<< HEAD
<<<<<<< HEAD
                    <a href="<?php bloginfo('url'); ?>/journal-selector/">
                    	<figure>
                    		<img src="<?php the_field('journal_feature_image'); ?>" alt="Slide name"/>
                    		<figcaption><?php the_field('journal_selector_title'); ?></figcaption>
                    	</figure>
                    	<h1><?php the_field('journal_selector_sub_title'); ?></h1>
                    	<p><?php the_field('journal_intro'); ?></p>
=======
=======
>>>>>>> FETCH_HEAD
                    <a href="#">
                    	<figure>
                    		<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/awaiting-image.jpg" alt="Slide name"/>
                    		<figcaption>JOURNAL SELECTOR</figcaption>
                    	</figure>
                    	<h1>Our free tool lets you search the most popular open access journals.</h1>
                    	<p>Find the one most suitable for your paper, whether the most important thing is speed, cost, selectivity or impact.</p>
<<<<<<< HEAD
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
                    	<span>More <strong>+</strong></span>
                    </a>
                </article>
			</div>
 
        </section> <!-- /#main -->
		 
    </div> <!-- /.wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
