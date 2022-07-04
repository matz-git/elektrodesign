<?php

require(get_template_directory() . '/includes/theme-setup.php');
require(get_template_directory() . '/includes/menus.php');

//Posttypes
require (get_template_directory()) . '/includes/posttypes/referenzen.php';

add_filter('show_admin_bar', '__return_false');

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items
Appearance
Comments
Links
Media
Pages
Plugins
Posts
Settings
Tools
Users

$remove_menu_items = array(__('Links'),__('Portfolio'),__('Slides'),__('Feedback'));
*/
/*-----------------------------------------------------------------------------------*/

function remove_admin_menu_items()
{
  $remove_menu_items = array(__('Comments'));
    //    $remove_menu_items = array(__('Comments'),__('Posts'));

    global $menu;
    end($menu);
    while (prev($menu)) {
        $item = explode(' ', $menu[key($menu)][0]);
        if (in_array($item[0] != NULL ? $item[0] : "", $remove_menu_items)) {
            unset($menu[key($menu)]);
        }
    }
}

add_action('admin_menu', 'remove_admin_menu_items');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 200;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Hide editor on specific pages.
 *
 */
 
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'Startseite'){ 
    remove_post_type_support('page', 'editor');
  }
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'my-page-template.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}


// Remove type attribute from script/style tag
add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );