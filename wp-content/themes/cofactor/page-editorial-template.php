<?php 
/*
Template Name: Editorial sub page 3 col
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
        
        	<div class="content__box content__box--removebottommargin">
				
				<section class="page__section">
					<?php the_content(); ?>
               </section>
                
                <section class="page__section page__section--remove-border page__section--bottom-margin">
                	<h2><?php the_field('list_one_title'); ?></h2>
                </section>
             
              <div class="col col--first">
              		<?php if( get_field('content_box_one_title') ): ?><h2 class="coltwo"><?php the_field('content_box_one_title'); ?></h2><?php endif; ?>
                  <?php the_field('content_area_one'); ?>  
              </div>
              <div class="col">
              		<?php if( get_field('content_box_two_title') ): ?><h2 class="coltwo"><?php the_field('content_box_two_title'); ?></h2><?php endif; ?>
                  <?php the_field('content_box_two'); ?>  
              </div>
              <div class="col col--third">
              		<?php if( get_field('content_box_three_title') ): ?><h2 class="coltwo"><?php the_field('content_box_three_title'); ?></h2><?php endif; ?>
                  <?php the_field('content_box_three'); ?> 
              </div>
              
        	</div>
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
