<?php 
/*
Template Name: Editorial page
*/
get_header(); ?>

	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <div class="title__box colone">
        	<div class="wrapper">
        		<h1><?php the_title(); ?></h1>
        	</div>	
		</div>
        <div class="wrapper">
        
        	<div class="content__box content__box--large content__box--removebottommargin editor--styling">
				<?php the_content(); ?>
              <?php if( have_rows('add_steps') ): ?>
              <ul class="steps">
              		<?php while(the_repeater_field('add_steps')): ?>
                  	<li class="step"><span><?php the_sub_field('step_number'); ?></span><?php the_sub_field('add_some_text_here'); ?></li>
                  <?php  endwhile;  ?>
              </ul>
              <?php endif; ?>
        	</div>
          <div class="border">
              <h2>Quicklinks:</h2>
          </div>

		   <?php if( have_rows('quick_links', 11) ): ?>
              <ul class="quick__links">
				  <?php while(the_repeater_field('quick_links', 11)): ?>
                  	<li><a class="qlinks" href="<?php the_sub_field('link_to_page', 11); ?>"><?php the_sub_field('link_name', 11); ?></a></li>
                  <?php  endwhile;  ?>
              </ul>
          <?php endif; ?>
        </div>
		<?php endwhile; ?>

	</section> <!-- /#main -->


<?php get_footer(); ?>
