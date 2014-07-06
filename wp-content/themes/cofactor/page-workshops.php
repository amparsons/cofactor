<?php get_header(); ?>

	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <div class="title__box coltwo">
        	<div class="wrapper">
        		<h1><?php the_title(); ?></h1>
        	</div>	
		</div>
        <div class="wrapper">
        	<div class="content__box content__box--large">
				<?php the_content(); ?>
        	</div>

			<?php if( have_rows('add_some_workshops') ): ?>
				<?php while(the_repeater_field('add_some_workshops')): ?> 
               <div class="workshop workshop--first">
                  <h2 class="coltwo"><span><?php the_sub_field('workshop_name'); ?></span><img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('workshop_name'); ?>"/></h2>
                  <?php the_sub_field('about_this_workshop'); ?>
              </div>
              <?php  endwhile;  ?>
			<?php endif; ?>
            
		<?php endwhile; ?>

	</section> <!-- /#main -->


<?php get_footer(); ?>
