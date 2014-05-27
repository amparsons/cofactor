<?php 
/*
Template Name: The Cofactor Summary
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

			<?php the_content(); ?>
            
          <section class="page__section">
                <h2><?php the_field('main_column_title'); ?></h2>
              <div class="col remove--bottom--margin col--first">
                  <?php the_field('editor_column_one'); ?>  
              </div>
              <div class="col remove--bottom--margin">
                  <?php the_field('editor_column_two'); ?> 
              </div>
              <div class="col remove--bottom--margin col--third">
                  <?php the_field('editor_column_three'); ?> 
              </div>
          </section>
          
          <section class="page__section">
                <h2><?php the_field('second_section_title'); ?></h2>
              <div class="col remove--bottom--margin col--first">
                  <?php the_field('second_section_column_one'); ?>  
              </div>
              <div class="col remove--bottom--margin">
                  <?php the_field('second_section_column_two'); ?> 
              </div>
              <div class="col remove--bottom--margin col--third">
                  <?php the_field('second_section_column_three'); ?> 
              </div>
              <div class="col--additional">
              	<?php the_field('additional_text_for_section'); ?>
              </div>
          </section>
          
          <section class="page__section">
                <h2><?php the_field('main_section_three_title'); ?></h2>
              <div class="col remove--bottom--margin col--first">
                  <?php the_field('section_three_column_one_3'); ?>  
              </div>
              <div class="col remove--bottom--margin">
                  <?php the_field('section_three_column_two'); ?> 
              </div>
              <div class="col remove--bottom--margin col--third">
                  <?php the_field('section_three_column_three'); ?> 
              </div>
              <div class="col--additional">
              		<?php the_field('section_three_additional_text'); ?>
              </div>
          </section> 
          
          <section class="page__section page__section--four">
              <?php the_field('section_four_content'); ?> 
          </section> 

      
          <div class="border">
              <h2>Quicklinks:</h2>
          </div>

		   <?php if( have_rows('quick_links', 11) ): ?>
              <ul class="quick__links id<?php echo $post->ID; ?>">
				  <?php while(the_repeater_field('quick_links', 11)): ?>
                  	<li><a class="qlinks" href="<?php the_sub_field('link_to_page', 11); ?>"><?php the_sub_field('link_name', 11); ?></a></li>
                  <?php  endwhile;  ?>
              </ul>
          <?php endif; ?>
        </div>
		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
