<?php
require_once (dirname(__FILE__) . '/options/barebones-config.php');

function register_my_menu()
{
    register_nav_menu('new-menu', __('footer menu'));
}
add_action('init', 'register_my_menu');

add_filter('comment_post_redirect', function ($location, $comment) {
    return str_replace("#comment-{$comment->comment_ID}", '', $location);
}, 10, 2);


//اضافه کردن آکادمی به سایت
// academy Custom post
function create_posttype() {
 
    register_post_type( 'academy',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'آکادمی' ),
                'singular_name' => __( 'درس' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'academy'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name' => __( 'آکادمی' ),
        'singular_name' => __( 'درس' ),
        'menu_name'           => __( 'آکادمی شفافیت'),
        'parent_item_colon'   => __( 'Parent Movie'),
        'all_items'           => __( 'همه درس‌ها'),
        'view_item'           => __( 'دیدن درس'),
        'add_new_item'        => __( 'اضافه کردن درس تازه'),
        'add_new'             => __( 'اضافه کردن درس'),
        'edit_item'           => __( 'ویرایش درس'),
        'update_item'         => __( 'به روز رسانی درس'),
        'search_items'        => __( 'جستجوی درس'),
        'not_found'           => __( 'بدون نتیجه'),
        'not_found_in_trash'  => __( 'بدون نتیجه در زباله دان'),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'درس‌ها'),
        'description'         => __( 'برچسب های درس ها'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'academy', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

?>
