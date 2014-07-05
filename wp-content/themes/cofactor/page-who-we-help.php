<?php 
	/*
		Template Name: Who we help
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
        	<section class="page__section">
				<?php 
                if ( has_post_thumbnail() ) {
                	the_post_thumbnail('featuredimg', array('class' => 'feature'));
                } 
                ?>
				<?php the_content(); ?>
        	</section>
            
          <section class="page__section">
              <h2><?php the_field('title_two_col'); ?></h2>
              <div class="col2 remove--bottom--margin col2--first">
              	<?php the_field('column_one_content_two_col'); ?>  
              </div>
              <div class="col2 remove--bottom--margin col2--last">
              		<?php the_field('column_two_content_two_col'); ?> 
              </div>
          </section>
          
          <section class="page__section">
                <h2><?php the_field('tilte_col_three'); ?></h2>
              <div class="col3 remove--bottom--margin col3--first">
                  <?php the_field('column_one_content_col_three'); ?>  
              </div>
              <div class="col3 remove--bottom--margin">
                  <?php the_field('column_two_content_col_three'); ?> 
              </div>
              <div class="col3 remove--bottom--margin col3--last">
                  <?php the_field('column_three_content_col_three'); ?> 
              </div>
          </section>
          
          <section class="page__section toppcontent">
                <h2><?php the_field('title_six_col'); ?></h2>
               <?php the_field('intro_text_col_six'); ?> 
              <div class="col6 remove--bottom--margin col6--first">
                  <?php the_field('column_one_text_col_six'); ?>  
              </div>
              <div class="col6 remove--bottom--margin">
                  <?php the_field('column_two_text_col_six'); ?> 
              </div>
              <div class="col6 remove--bottom--margin">
                  <?php the_field('column_three_text_col_six'); ?> 
              </div>
              <div class="col6 remove--bottom--margin">
                  <?php the_field('column_four_text_col_six'); ?> 
              </div>
              <div class="col6 remove--bottom--margin">
                  <?php the_field('column_five_text_col_six'); ?> 
              </div>
              <div class="col6 remove--bottom--margin col6--last">
                  <?php the_field('column_six_text_col_six'); ?> 
              </div>
              <div class="col--additional col--additional--margin--bottom green-links">
              		<?php the_field('additional_content_col_six'); ?>
              </div>
          </section>

		   <?php if( have_rows('repeat_column_cycle') ): ?>
			  <?php while(the_repeater_field('repeat_column_cycle')): ?>  
              <section class="page__section green-links">
                  <h2><?php the_sub_field('the_section_title'); ?></h2>
                  <div class="col2 remove--bottom--margin col2--first">
                  	<?php the_sub_field('column_one_content_repeater'); ?>  
                  </div>
                  <div class="col2 remove--bottom--margin col2--last">
                  	<?php the_sub_field('column_two_content_repeater'); ?>
                  </div>
              </section>
              <?php  endwhile;  ?>
          <?php endif; ?>
          
          <section class="page__section toppcontent green-links">
              <h2><?php the_field('title_full_with'); ?></h2>
              	<?php the_field('editor_full_width'); ?>  
          </section>
          
          <section class="page__section green-links page__section--four">
              <h2><?php the_field('title_two_col_last'); ?></h2>
              <div class="col2 remove--bottom--margin col2--first">
              	<?php the_field('column_one_two_col_last'); ?>  
              </div>
              <div class="col2 remove--bottom--margin col2--last">
              		<?php the_field('column_two_two_col_last'); ?> 
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

<?php get_sidebar(); ?>

<?php get_footer(); ?>
