<?php get_header(); ?>

	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <div class="title__box">
        	<div class="wrapper">
        		<h1><?php the_title(); ?></h1>
        	</div>	
		</div>
        <div class="wrapper">
        	<div class="content__box content__box--large">
				<?php 
                if ( has_post_thumbnail() ) {
                	the_post_thumbnail('featuredimg', array('class' => 'feature'));
                } 
                ?>
				<?php the_content(); ?>
        	</div>
        </div>
		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
