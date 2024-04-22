<?php
// Theme settings options
$opt = get_option('banca_opt');

// Image sizes
add_image_size('banca_690x418', 690, 418, true); // Blog Post Thumbnails
add_image_size('banca_320x208', 320, 208, true); // Blog Related Post Thumbnails

// add category nick names in body and post class
function banca_post_class($classes)
{
    global $post;
    if (!has_post_thumbnail()) {
        $classes[] = 'no-post-thumbnail';
    }
    if (is_sticky() && !in_array('sticky', $classes)) {
        $classes[] = 'sticky';
    }
    return $classes;
}

add_filter('post_class', 'banca_post_class');


/**
 * Body classes
 */
add_filter('body_class', function ($classes) {

    $opt = get_option('banca_opt');
    $is_dark_default = !empty($opt['is_dark_default']) ? $opt['is_dark_default'] : false;

    if ($is_dark_default == '1') {
        wp_enqueue_style('banca-dark-mode');
        $classes[] = 'body_dark';
    }

    return $classes;
});

/**
 * Show post excerpt by default
 * @param $user_login
 * @param $user
 */
function banca_show_post_excerpt($user_login, $user)
{
    $unchecked = get_user_meta($user->ID, 'metaboxhidden_post', true);
    $key = is_array($unchecked) ? array_search('postexcerpt', $unchecked) : FALSE;
    if (FALSE !== $key) {
        array_splice($unchecked, $key, 1);
        update_user_meta($user->ID, 'metaboxhidden_post', $unchecked);
    }
}

add_action('wp_login', 'banca_show_post_excerpt', 10, 2);


// filter to replace class on reply link
add_filter('comment_reply_link', function ($class) {
    $class = str_replace("class='comment-reply-link", "class='comment_reply", $class);
    return $class;
});

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function banca_pingback_header()
{
    if (is_singular() && pings_open()) {
        echo '<link rel="pingback" href="', esc_url(get_bloginfo('pingback_url')), '">';
    }
}

add_action('wp_head', 'banca_pingback_header');

// Move the comment field to bottom
add_filter('comment_form_fields', function ($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
});

// Remove WordPress admin bar default CSS
add_action('get_header', function () {
    remove_action('wp_head', '_admin_bar_bump_cb');
});


// Elementor post type support
function banca_add_cpt_support()
{

    //if exists, assign to $cpt_support var
    $cpt_support = get_option('elementor_cpt_support');

    //check if option DOESN'T exist in db
    if (!$cpt_support) {
        $cpt_support = ['page', 'post']; //create array of our default supported post types
        update_option('elementor_cpt_support', $cpt_support); //write it to the database
    }

    //otherwise do nothing, portfolio already exists in elementor_cpt_support option
}

add_action('after_switch_theme', 'banca_add_cpt_support');


// Wrap up the category count in span tag
add_filter('wp_list_categories', function ($links) {
    $links = str_replace('</a> (', '<span>(', $links);
    $links = str_replace(')', ')</span> </a>', $links);
    return $links;
});

// Wrap up the Archive count in span tag
add_filter('get_archives_link', function ($links) {
    $links = str_replace('</a>&nbsp;(', '<span>(', $links);
    $links = str_replace(')', ')</span> </a>', $links);
    return $links;
});


// Remove auto p from Contact Form 7 shortcode output
add_filter('wpcf7_autop_or_not', function () {
    return false;
});
