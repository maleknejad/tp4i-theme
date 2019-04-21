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


?>
