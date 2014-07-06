<?php 
	/*
		Template Name: Editors and Consultants
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
        	
            <section class="page__section page__section--remove-border page__section--style-two">
				<?php the_content(); ?>
        	</section>
            
          <section class="page__section">
              <div class="col2 remove--bottom--margin col2--first">
              	<?php the_field('column_one_content_editor_one'); ?>  
              </div>
              <div class="col2 remove--bottom--margin col2--last">
              		<?php the_field('column_two_content_editor_one'); ?> 
              </div>
              <div class="col--additional col--additional--margin--bottom green-links page__section--style-two">
              		<?php the_field('additional_content_editro_one'); ?>
              </div>
          </section>

          <section class="page__section page__section--bottom-padding">
          		<h2><?php the_field('titlerepeater_two_columns'); ?></h2>
               <?php if( have_rows('columns_repeater_twos') ): ?>
            	<?php while(the_repeater_field('columns_repeater_twos')): ?>
              <div class="col3-auto">
              	<?php the_sub_field('column_content_repeater_twos'); ?>
              </div>
              <?php  endwhile;  ?>
            <?php endif; ?>
          </section>
          
          <section class="page__section toppcontent">
          		<?php the_field('top_content_area'); ?>
               <?php if( have_rows('column_repeater_three') ): ?>
            	<?php while(the_repeater_field('column_repeater_three')): ?>
              <div class="col3-auto col3-auto--bottom-margin green-links">
              	<?php the_sub_field('column_content_repeater'); ?>
              </div>
              <?php  endwhile;  ?>
            <?php endif; ?>
            <div class="col--additional col--additional--margin--top col--additional--margin--bottom green-links">
              		<?php the_field('bottom_content_area'); ?>
              </div>
          </section>
          
          <section class="page__section toppcontent">
          		<?php the_field('top_content_area_call_section'); ?>
               <div class="col2 remove--bottom--margin col2--first">
              	<?php the_field('column_one_call_editor'); ?>  
              </div>
              <div class="col2 remove--bottom--margin col2--last">
              		<?php the_field('column_two_call_editor'); ?> 
              </div>
            <div class="col--additional text-spacer col--additional--margin--top col--additional--margin--bottom green-links">
              		<?php the_field('bottom_content_area_call_editor'); ?>
              </div>
          </section>

            
            <?php if( have_rows('add_new_link', 15) ): ?>
              <ul class="quick__links id<?php echo $post->ID; ?>">
				  <?php while(the_repeater_field('add_new_link', 15)): ?>
                  	<li><a class="qlinks" href="<?php the_sub_field('page_to_link_to', 15); ?>"><?php the_sub_field('link_name', 15); ?></a></li>
                  <?php  endwhile;  ?>
              </ul>
          <?php endif; ?>
        </div>
		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_footer(); ?>
