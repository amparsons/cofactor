<aside>
	<div class="search-posts">
    	<h2>Search Blog</h2>
    	 <?php get_search_form(); ?> 
    </div>
    
    <h2>Recent Posts</h2>
    <ul class="fullwidth">
        <?php
            $recent_posts = wp_get_recent_posts();
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
            }
        ?>
    </ul>
    
    <h2>Archive</h2>
    <ul class="fullwidth">
        <?php wp_get_archives('type=monthly'); ?>
    
    </ul>
    
    <h2>Category</h2>
    <ul class="fullwidth">
        <?php wp_list_categories('orderby=name&title_li='); ?>
    </ul>
    
    <h2>Tags</h2>
    <div class="tags">
        <?php wp_tag_cloud(); ?>
    </div> 

</aside>