<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banca
 */

// Theme settings options
$opt = get_option('banca_opt');
global $post;

$is_sticky_header = banca_opt('is_header_sticky');
if ( $is_sticky_header == '1' && class_exists('Redux') ) {
    $is_sticky_header = 'sticky';
} else {
    $is_sticky_header = 'no-sticky';
}

$is_doc_fullwidth_single_page_container = class_exists('EazyDocs') ? ' custom_container' : '';

$menu_align = !empty($opt['menu_align']) ? $opt['menu_align'] : '';
$navbar_class = 'm-auto';
switch ( $menu_align ) {
    case 'left':
        $navbar_class = 'ms-5 me-auto';
        break;
    case 'center':
        $navbar_class = 'm-auto';
        break;
    case 'right':
    $navbar_class = 'ms-auto me-0';
        break;
    default:
        $menu_class = 'm-auto';
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php
    if ( function_exists('wp_body_open') ) {
        wp_body_open();
    }
    /**
     * Pre-loader
     */
    $is_preloader = isset($opt['is_preloader']) ? $opt['is_preloader'] : '';
    $preloader_pages = !empty($opt['preloader_pages']) ? $opt['preloader_pages'] : 'all';

    if ($is_preloader == '1' && $preloader_pages == 'all') {
        get_template_part('template-parts/header-elements/pre-loader');
    }

    $preloader_page_ids = !empty($opt['preloader_page_ids']) ? explode(',', $opt['preloader_page_ids']) : '';
    if ($is_preloader == '1' && $preloader_pages == 'specific_pages' && !empty($preloader_page_ids)) {
        if (is_object($post) && in_array($post->ID, $preloader_page_ids))
            get_template_part('template-parts/header-elements/pre-loader');
    }
    ?>
     <!--------------Body Wrapper -------------->
    <div class="body_wrapper position-relative overflow-hidden <?php banca_sticky_navbar() ?>">
        <?php
        if (is_404()) {
            echo '';
        } else {
            ?>
            <header class="header">
                <?php
                // Top Header
                get_template_part('template-parts/header-elements/top-header');
                ?>
                <div class="header-menu header-menu-3" id="<?php echo esc_attr($is_sticky_header) ?>">
                    <nav class="navbar navbar-expand-lg">
                        <div class="<?php banca_nav_container(); echo esc_attr($is_doc_fullwidth_single_page_container) ?>">
                            <?php Banca_helper()->logo(); ?>
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'banca'); ?>">
                                <span class="menu_toggle">
                                    <span class="hamburger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="hamburger-cross">
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php
                                if (has_nav_menu('main_menu')) {
                                    wp_nav_menu(array(
                                        'menu' => 'main_menu',
                                        'theme_location' => 'main_menu',
                                        'container' => null,
                                        'menu_class' => 'navbar-nav menu ' .$navbar_class,
                                        'walker' => new Banca_Nav_Walker(),
                                        'depth' => 3
                                    ));
                                }
                                // Action Button
                                get_template_part('template-parts/header-elements/action-button');
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <?php
        }