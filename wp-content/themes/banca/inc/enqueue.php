<?php

/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function banca_fonts_url()
{
    $fonts_url = '';
    $fonts = array();
    $subsets = '';

    /*
     * Translators: If there are characters in your language that are not supported
     * by Roboto, translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Roboto font: on or off', 'banca')) {
        $fonts[] = 'Roboto:400,500,700';
    }

    /*
     * Translators: If there are characters in your language that are not supported
     * by Poppins, translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Poppins font: on or off', 'banca')) {
        $fonts[] = 'Poppins:400,500,600,700';
    }


    $is_ssl = is_ssl() ? 'https' : 'http';

    if ($fonts) {
        $fonts_url = add_query_arg(array(
            'family' => urlencode(implode('|', $fonts)),
            'subset' => urlencode($subsets),
        ), "$is_ssl://fonts.googleapis.com/css");
    }

    return $fonts_url;
}

/**
 * Enqueue site scripts and styles
 */
function banca_scripts()
{
    $opt = get_option('banca_opt');
    /**
     * Registering site's styles
     */
    wp_register_style('banca-fonts', banca_fonts_url(), array(), null);
    wp_register_style('banca-dark-mode', BANCA_DIR_VEND . '/dark-mode/dark-mode.css');


    /**
     * Enqueue site's styles
     */
    wp_enqueue_style('banca-fonts');

    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', BANCA_DIR_VEND . '/bootstrap/css/bootstrap.rtl.min.css');
    } else {
        wp_enqueue_style('bootstrap', BANCA_DIR_VEND . '/bootstrap/css/bootstrap.min.css');
    }

    wp_enqueue_style('elegant-icon', BANCA_DIR_VEND . '/elegant-icon/style.css');
    wp_enqueue_style('fontawesome', BANCA_DIR_VEND . '/font-awesome/style.css');
    wp_enqueue_style('banca-animate', BANCA_DIR_VEND . '/animation/animate.css');
    wp_enqueue_style('nice-select', BANCA_DIR_VEND . '/nice-select/nice-select.css');
    wp_enqueue_style('intlTelInput', BANCA_DIR_VEND . '/intlTelInput/intlTelInput.css');
    wp_enqueue_style('banca-blog', BANCA_DIR_CSS . '/blog.css');
    wp_enqueue_style('banca-main', BANCA_DIR_CSS . '/style.css');
    wp_enqueue_style('banca-wp-custom', BANCA_DIR_CSS . '/wp-custom.css');


    // WooCommerce stylesheets
    if ( class_exists( 'WooCommerce' ) ) {
        if ( is_shop() || is_singular( 'product' ) || is_cart() || is_checkout() || is_account_page() ) {
            wp_enqueue_style( 'banca-shop', BANCA_DIR_CSS . '/shop.css' );
        }
    }

    wp_enqueue_style('banca-root', get_stylesheet_uri());

    if ( is_rtl() ) {
        wp_enqueue_style('banca-main-rtl', BANCA_DIR_CSS . '/rtl.css');
    }

    wp_enqueue_style('banca-responsive', BANCA_DIR_CSS . '/responsive.css');

    if (class_exists('EazyDocs')) {
        wp_enqueue_style('banca-eazy-docs', BANCA_DIR_CSS . '/eazy-docs.css');
    }

    // Inline CSS Render File
    require_once get_template_directory() . '/inc/banca_css_render.php';

    /**
     * Register site's scripts
     */
    wp_register_script('parallax', BANCA_DIR_VEND . '/parallax/parallax.js', array('jquery'), '1.0', true);
    wp_register_script('parallax-scroll', BANCA_DIR_VEND . '/parallax/jquery.parallax-scroll.js', array('jquery'), '1.0', true);
    wp_register_script('banca-dark-mode', BANCA_DIR_VEND . '/dark-mode/dark-mode.js', array('jquery'), '1.0.0', true);


    /**
     * Enqueue site's scripts
     */
    wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@5.4.0/dist/ionicons.js', '', '5.4.0', true);
    wp_enqueue_script('popper', BANCA_DIR_VEND . '/bootstrap/js/popper.min.js', array('jquery'), '2.9.2', true);
    wp_enqueue_script('bootstrap', BANCA_DIR_VEND . '/bootstrap/js/bootstrap.min.js', array('jquery'), '5.0.2', true);
    wp_enqueue_script('wow', BANCA_DIR_VEND . '/wow/wow.min.js', array('jquery'), '1.3.0', true);
    wp_enqueue_script('intlTelInput', BANCA_DIR_VEND . '/intlTelInput/intlTelInput-jquery.min.js', array('jquery'), '17.0.12', true);
    wp_enqueue_script('dropzone', BANCA_DIR_VEND . '/dropzone/dropzone.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('nice-select', BANCA_DIR_VEND . '/nice-select/jquery.nice-select.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('smoothscroll', BANCA_DIR_VEND . '/smoothscroll/jquery.smoothscroll.min.js', array('jquery'), '1.5.2', true);
    wp_enqueue_script('banca-preloader', BANCA_DIR_JS . '/preloader.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('banca-wp-custom', BANCA_DIR_JS . '/wp-custom.js', array('jquery'), BANCA_THEME_VERSION, true);
    wp_enqueue_script('banca-wp-ajax', BANCA_DIR_JS . '/wp-ajax.js', array('jquery'), BANCA_THEME_VERSION, true);

    /**
     * Inline Scripts
     */
    $dynamic_js = '';


    /**
     * Ajax
     */
    wp_localize_script('banca-wp-ajax', 'load_more_btn', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));

    wp_add_inline_script('banca-wp-custom', $dynamic_js);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}


add_action('wp_enqueue_scripts', 'banca_scripts');

// Admin dashboard style and scripts
add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style('banca-admin', BANCA_DIR_CSS . '/admin.css');
});