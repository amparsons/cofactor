<?php 
	/*
	Template Name: About us page template
	*/
get_header(); ?>

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
                	the_post_thumbnail('full', array('class' => 'feature'));
                } 
                ?>
				<?php the_content(); ?>
        	</div>
           <?php if( have_rows('add_new_link', 15) ): ?>
              <ul class="quick__links">
				  <?php while(the_repeater_field('add_new_link', 15)): ?>
                  	<li><a class="qlinks" href="<?php the_sub_field('page_to_link_to', 15); ?>"><?php the_sub_field('link_name', 15); ?></a></li>
                  <?php  endwhile;  ?>
              </ul>
          <?php endif; ?>
        </div>
		<?php endwhile; ?>

	</section> <!-- /#main -->


<?php get_footer(); ?>
