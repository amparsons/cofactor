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
        		<?php if( get_field('sub_title_for_page') ): ?><?php the_field('sub_title_for_page'); ?><?php endif; ?>
              
			  <?php if( have_rows('add_ways_to_contact_anna') ): ?>
              <ul class="contact-us">
                <?php while(the_repeater_field('add_ways_to_contact_anna')): ?> 
                <li>
                	<img src="<?php the_sub_field('icon'); ?>" alt="Cofactor"/>
                	<?php the_sub_field('information'); ?>
                </li>
                <?php  endwhile;  ?>
              </ul>
              <?php endif; ?>
              
              <div class="small__content">
              	<?php the_content(); ?>
              </div>
        	</div>
        </div>
		<?php endwhile; ?>

	</section> <!-- /#main -->


<?php get_footer(); ?>
