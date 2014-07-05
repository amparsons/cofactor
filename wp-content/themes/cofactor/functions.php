<?php

/****************************************
Theme Setup
*****************************************/

require_once( get_template_directory() . '/assets/theme-helpers/init.php' );
require_once( get_template_directory() . '/assets/theme-helpers/theme-helpers.php' );
require_once( get_template_directory() . '/assets/theme-helpers/theme-functions.php' );


/****************************************
Require Plugins
*****************************************/

require_once( get_template_directory() . '/assets/theme-helpers/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/assets/theme-helpers/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/
/**
 * Hide ACF menu item from the admin menu
 */
 
function remove_acf_menu()
{
 
    // provide a list of usernames who can edit custom field definitions here
    $admins = array( 
        'anna'
    );
 
    // get the current user
    $current_user = wp_get_current_user();
 
    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf');
    }
 
}
 
add_action( 'admin_menu', 'remove_acf_menu', 999 );

// truncate function
function truncate($string, $limit, $break=" ", $pad="...")
{
	// Remove any formatting first
	$string = strip_tags($string);
	if(strlen($string) <= $limit) return $string;
	if(false !== ($breakpoint = strpos($string, $break, $limit)))
	{
		if($breakpoint < strlen($string) - 1)
		{
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}
	return $string;
}


/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps() {
	//mb_add_capabilities( 'portfolio' );
}

/**
 * Allow SVG file upload in Wordpress Admin area
 */
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// add featured image support
function custom_image_sizes() {
    add_theme_support('post-thumbnails');
	add_image_size('slide', 3000, 340, TRUE);
	add_image_size('featuredimg', 141, 9999, TRUE);
	add_image_size('homebx', 301, 220, TRUE);
	add_image_size('workshop', 99, 90, TRUE);
}
add_action('after_setup_theme', 'custom_image_sizes');

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}


