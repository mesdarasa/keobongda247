<?php
/**
 * @param string $content Text content to filter.
 * @return string Filtered content containing only the allowed HTML.
 * */
if (!function_exists('banca_kses_post')) {
    function banca_kses_post($content)
    {
        $allowed_tag = array(
            'strong' => [],
            'br' => [],
            'p' => [
                'class' => [],
                'style' => [],
            ],
            'i' => [
                'class' => [],
                'style' => [],
            ],
            'ul' => [
                'class' => [],
                'style' => [],
            ],
            'li' => [
                'class' => [],
                'style' => [],
            ],
            'span' => [
                'class' => [],
                'style' => [],
            ],
            'a' => [
                'href' => [],
                'class' => [],
                'title' => []
            ],
            'div' => [
                'class' => [],
                'style' => [],
            ],
            'h1' => [
                'class' => [],
                'style' => []
            ],
            'h2' => [
                'class' => [],
                'style' => []
            ],
            'h3' => [
                'class' => [],
                'style' => []
            ],
            'h4' => [
                'class' => [],
                'style' => []
            ],
            'h5' => [
                'class' => [],
                'style' => []
            ],
            'h6' => [
                'class' => [],
                'style' => []
            ],
            'img' => [
                'class' => [],
                'style' => [],
                'height' => [],
                'width' => [],
                'src' => [],
                'srcset' => [],
                'alt' => [],
            ],

        );
        return wp_kses($content, $allowed_tag);
    }
}


/**
 * Post title array
 */
if ( !function_exists('banca_get_postTitleArray') ) {
    function banca_get_postTitleArray($postType = 'post') {
        $post_type_query = new WP_Query(
            array(
                'post_type' => $postType,
                'posts_per_page' => -1
            )
        );

        // we need the array of posts
        $posts_array = $post_type_query->posts;
        // the key equals the ID, the value is the post_title
        if (is_array($posts_array)) {
            $post_title_array = wp_list_pluck($posts_array, 'post_title', 'ID');
        } else {
            $post_title_array['default'] = esc_html__('Default', 'banca');
        }

        return $post_title_array;
    }
}



/**
 *
 * @param String
 * Return Publish Post
 * Posts Count
 */
if ( !function_exists( 'banca_count_posts' ) ) {
    function banca_count_posts() {
        $count_posts = wp_count_posts('job');
        $total_posts = $count_posts->publish;
        $default_zero = esc_html__('0', 'banca');

        if ($total_posts == 0) {
            $text_post = esc_html__('No job offer', 'banca');
        } elseif ($total_posts <= 9) {
            $text_post = $default_zero . $total_posts . esc_html__(' job offers', 'banca');
        } elseif ($total_posts > 9) {
            $text_post = $total_posts . esc_html__(' job offers', 'banca');
        }

        echo esc_html($text_post);

    }
}


/**
 * Banner Style Settings
 * @param string $settings_key themes and meta options key
 * @return string
 * */
if ( !function_exists( 'banca_banner_options') ) {
    function banca_banner_options($settings_key) {

        global $banca_opt;
        $style_opt = !empty($banca_opt[$settings_key]) ? $banca_opt[$settings_key] : '1';
        $style_page = (function_exists('get_field') && '' != get_field($settings_key) && (get_field($settings_key) != 'default')) ? get_field($settings_key) : $style_opt;

        return $style_page;
    }
}


//Banner Shop
if ( !function_exists('banca_get_shop_banner') ) {
    function banca_get_shop_banner() {
        if ( class_exists('WooCommerce') ) {
            if ( is_shop() || is_cart() ) {
                get_template_part( 'template-parts/header-elements/banner-2' );
            }
        }
    }
}


/**
 * Theme Banner Options
 */
if ( !function_exists( 'banca_get_banner') ) {
    function banca_get_banner() {
        // Is Banner
        if (is_page()) {
            $is_banner = function_exists('get_field') ? get_field('is_banner') : '1';
        } else {
            $is_banner = '1';
        }

        if (is_404()) {
            $is_banner = '';
        }

        //============ Page Banner Settings
        if ($is_banner == '1' && !is_singular(['post', 'job'])) {
            if (is_archive()) {
                get_template_part('template-parts/header-elements/banner', '2');
            } else {
                get_template_part('template-parts/header-elements/banner', banca_banner_options('banner_style'));
            }
        }

        //========= Single Banner Settings
        if ($is_banner == '1') {
            if (is_singular('post')) {
                get_template_part('template-parts/header-elements/banner-single', '1');
            }
            if (is_singular('job')) {
                get_template_part('template-parts/header-elements/banner-single', '2');
            }
        }

    }
}


/**
 * get Banca option
 */
if (!function_exists('banca_opt')) {
    function banca_opt($section_id, $default = '') {
        $banca_option_data = $default;
        if (class_exists('Redux')) {
            global $banca_opt;
            $banca_option_data = (isset($banca_opt[$section_id])) && (!empty($banca_opt[$section_id])) ? $banca_opt[$section_id] : $default;
        }
        return $banca_option_data;
    }
}


/**
 * Nav container
 */
if ( !function_exists( 'banca_nav_container' ) ) {
    function banca_nav_container($class = '')
    {
        if (is_singular('docs')) {
            $nav_container = Banca_Helper()->page_width() == 'full-width' ? "container-fluid pl-60 pr-60 $class" : "container custom_container $class";
        } else {
            $nav_container = Banca_Helper()->page_width() == 'full-width' ? "container-fluid pl-60 pr-60 $class" : "container $class";
        }

        echo esc_attr($nav_container);
    }
}


/**
 *
 * Is Navbar Sticky
 */
if ( !function_exists( 'banca_sticky_navbar' ) ) {
    function banca_sticky_navbar ($class = 'wrapper', $stick_on = 'desktop') {
        $opt = get_option('banca_opt');
        $is_sticky_nav = isset($opt[ 'is_header_sticky' ]) ? $opt[ 'is_header_sticky' ] : '';
        $sticky_appearance = $opt[ 'sticky_appearance' ] ?? 'stick_up';

        if ($is_sticky_nav == '1') {
            $get_nav = !empty($_GET[ 'navbar' ]) ? $_GET[ 'navbar' ] : '';
            if ($stick_on == 'desktop') {
                if ($class == 'wrapper') {
                    echo $sticky_appearance == 'stick_all' || $get_nav == 'stick-all' ? 'sticky_menu' : '';
                } else {
                    echo $sticky_appearance == 'stick_all' || $get_nav == 'stick-all' ? 'stickyTwo' : 'sticky';
                }
            } elseif ($stick_on == 'mobile') {
                echo $sticky_appearance == 'stick_all' || $get_nav == 'stick-all' ? 'mobile-stickyTwo' : 'mobile-sticky';
            }
        }
    }
}



/** Page Title to id */

/**
 * @param $page_title_name
 * @return int|string|void
 */
function banca_get_page_title( $page_title_name ){
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );
    $page_title = get_posts($args);
    if( !empty( $page_title ) ){
        $title_name_id = '';
        foreach( $page_title as $title ){
            if( $page_title_name == $title->post_title ){
                $title_name_id = $title->ID;
            }
        }
        return $title_name_id;
    }
}