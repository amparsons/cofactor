<?php get_header(); ?>

	<section id="main" class="blog-posts" role="main">

        <div class="title__box">
        	<div class="wrapper">
        		<h1><?php the_title(); ?></h1>
        	</div>	
		</div>
        
        <div class="wrapper">
			<div class="posts posts-single-style">
				<?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <div class="tag-post-page">
                        <h2>Tags:&nbsp;</h2>
                        <div class="tags">
                            <?php wp_tag_cloud(); ?>
                        </div>
                    </div>
					<?php comments_template(); ?>
                <?php endwhile; ?>
          	</div>
            <?php get_sidebar(); ?>
        </div>

	</section> <!-- /#main -->

<?php get_footer(); ?>
