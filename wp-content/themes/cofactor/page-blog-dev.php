<?php get_header(); ?>

	<section id="main" class="blog-posts" role="main">

        <div class="title__box">
        	<div class="wrapper">
        		<h1>Blog</h1>
        	</div>	
		</div>
        
        <div class="wrapper">
			<div class="posts">
				<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array( 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', 'paged' => $paged);
					$wp_query = new WP_Query($args);
					
					while ( have_posts() ) : the_post(); 
				?>
                <article>
                	<a href="<?php echo get_permalink(); ?>">
                    	<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/post-thumb.jpg" alt=""/>
						<h1><?php echo the_title(); ?></h1>
                    	<p class="date"><?php the_time('jS M Y'); ?></p>
                    	<p><?php echo truncate($post->post_content, 180); ?> Read more</p>
                		<p class="comments"><?php comments_number( '(0) comments', '(1) comment', '(%) comments' ); ?></p>
                    </a>
                </article>
                <?php endwhile; ?>
                <?php if(function_exists('wp_paginate')) {
					wp_paginate();
				} ?>
          	</div>
            <?php get_sidebar(); ?>
        </div>

	</section> <!-- /#main -->

<?php get_footer(); ?>
