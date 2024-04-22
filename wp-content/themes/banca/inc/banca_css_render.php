<?php

/**
 * Inline Style
 */
$dynamic_css = '';

//======================= Acf Fields ============================= //
if (function_exists('get_field')) {

    /**
     * Customize the Action Button
     */
    $customize_button = get_field('customize_the_button');
    if ($customize_button == '1') {

        $btn_font_size = get_field('font_size');
        $btn_border_width = get_field('border_width');
        $btn_border_radius = get_field('border_radius');
        $btn_normal = get_field('normal');
        $btn_hover = get_field('hover');
        $sticky_btn_normal = get_field('sticky_normal');
        $sticky_btn_hover = get_field('sticky_hover');
        $btn_box_shadow = get_field('box_shadow');

        $btn_shadow = ($btn_box_shadow == '1') ? "-webkit-box-shadow: 2px 5px 20px 0px rgba(51, 77, 114, 0.2); box-shadow: 2px 5px 20px 0px rgba(51, 77, 114, 0.2);" : '';

        $btn_font_size = !empty($btn_font_size) ? "font-size: {$btn_font_size}px !important;" : '';
        $btn_border_width = !empty($btn_border_width) ? "border-width: {$btn_border_width}px;" : '';

        $btn_border_radius_top_left = !empty($btn_border_radius['top_left']) ? "border-top-left-radius: {$btn_border_radius['top_left']}px;" : '';
        $btn_border_radius_top_right = !empty($btn_border_radius['top_right']) ? "border-top-right-radius: {$btn_border_radius['top_right']}px;" : '';
        $btn_border_radius_bottom_right = !empty($btn_border_radius['bottom-right']) ? "border-bottom-right-radius: {$btn_border_radius['bottom-right']}px;" : '';
        $btn_border_radius_bottom_left = !empty($btn_border_radius['bottom-left']) ? "border-bottom-left-radius: {$btn_border_radius['bottom-left']}px;" : '';

        // Normal button style
        $btn_normal_background_color = !empty($btn_normal['background_color']) ? "background: {$btn_normal['background_color']};" : '';
        $btn_normal_bg_gradient_color = !empty($btn_normal['bg_gradient_color_01']) ? "background-image: linear-gradient(90deg, {$btn_normal['bg_gradient_color_01']} 3.04%, {$btn_normal['bg_gradient_color_02']} 100%);" : '';

        $btn_normal_background_type = $btn_normal['bg_color_type'] == '1' ? $btn_normal_background_color : $btn_normal_bg_gradient_color;
        $btn_normal_font_color = !empty($btn_normal['font_color']) ? "color: {$btn_normal['font_color']};" : '';
        $btn_normal_border_color = !empty($btn_normal['border_color']) ? "border-color: {$btn_normal['border_color']};" : '';
        $btn_normal_shadow_color = !empty($btn_normal['shadow_color']) ? $btn_normal['shadow_color'] : '';
        $btn_normal_shadow_color = !empty($btn_normal_shadow_color) ? "-webkit-box-shadow: 2px 5px 20px 0px {$btn_normal_shadow_color}; box-shadow: 2px 5px 20px 0px {$btn_normal_shadow_color};" : '';
        $btn_normal_shadow = (!empty($btn_normal['box_shadow']) && $btn_normal['box_shadow'] == '1') ? $btn_normal_shadow_color : 'box-shadow: none;';

        // Hover Button Style
        $btn_hover_background_color = !empty($btn_hover['background_color']) ? "background: {$btn_hover['background_color']};" : '';
        $btn_hover_bg_gradient_color = !empty($btn_hover['bg_gradient_color_01']) ? "background-image: linear-gradient(90deg, {$btn_hover['bg_gradient_color_01']} 3.04%, {$btn_hover['bg_gradient_color_02']} 100%);" : '';

        $btn_hover_background_type = $btn_hover['bg_color_type'] == '1' ? $btn_hover_background_color : $btn_hover_bg_gradient_color;
        $btn_hover_font_color = !empty($btn_hover['font_color']) ? "color: {$btn_hover['font_color']}!important;" : '';
        $btn_hover_border_color = !empty($btn_hover['border_color']) ? "border-color: {$btn_hover['border_color']};" : '';
        $btn_hover_shadow_color = !empty($btn_hover['shadow_color']) ? $btn_hover['shadow_color'] : '';
        $btn_hover_shadow_color = !empty($btn_normal_shadow_color) ? "-webkit-box-shadow: 2px 5px 20px 0px {$btn_hover_shadow_color}; box-shadow: 2px 5px 20px 0px {$btn_hover_shadow_color};" : '';
        $btn_hover_shadow = (!empty($btn_hover['box_shadow']) && $btn_hover['box_shadow'] == '1') ? $btn_hover_shadow_color : 'box-shadow: none;';

        // Sticky Normal style
        $sticky_btn_normal_background_color = !empty($sticky_btn_normal['background_color']) ? "background: {$sticky_btn_normal['background_color']} !important;" : '';
        $sticky_btn_normal_bg_gradient_color = !empty($sticky_btn_normal['bg_gradient_color_01']) ? "background-image: linear-gradient(90deg, {$sticky_btn_normal['bg_gradient_color_01']} 3.04%, {$sticky_btn_normal['bg_gradient_color_02']} 100%) !important;;" : '';

        $sticky_btn_normal_background_type = $sticky_btn_normal['bg_color_type'] == '1' ? $sticky_btn_normal_background_color : $sticky_btn_normal_bg_gradient_color;
        $sticky_btn_normal_font_color = !empty($sticky_btn_normal['font_color']) ? "color: {$sticky_btn_normal['font_color']} !important;" : '';
        $sticky_btn_normal_border_color = !empty($sticky_btn_normal['border_color']) ? "border-color: {$sticky_btn_normal['border_color']} !important;" : '';
        $sticky_btn_normal_shadow_color = !empty($sticky_btn_normal['shadow_color']) ? $sticky_btn_normal['shadow_color'] : '';
        $sticky_btn_normal_shadow_color = !empty($sticky_btn_normal_shadow_color) ? "-webkit-box-shadow: 2px 5px 20px 0px $sticky_btn_normal_shadow_color; box-shadow: 2px 5px 20px 0px $sticky_btn_normal_shadow_color;" : '';
        $sticky_btn_normal_shadow = (!empty($sticky_btn_normal['box_shadow']) && $sticky_btn_normal['box_shadow'] == '1') ? $sticky_btn_normal_shadow_color : 'box-shadow: none;';

        // Sticky Hover Style
        $sticky_btn_hover_background_color = !empty($sticky_btn_hover['background_color']) ? "background: {$sticky_btn_hover['background_color']} !important;" : '';
        $sticky_btn_hover_bg_gradient_color = !empty($sticky_btn_hover['bg_gradient_color_01']) ? "background-image: linear-gradient(90deg, {$sticky_btn_hover['bg_gradient_color_01']} 3.04%, {$sticky_btn_hover['bg_gradient_color_02']} 100%) !important;;" : '';

        $sticky_btn_hover_background_type = $sticky_btn_hover['bg_color_type'] == '1' ? $sticky_btn_hover_background_color : $sticky_btn_hover_bg_gradient_color;
        $sticky_btn_hover_font_color = !empty($sticky_btn_hover['font_color']) ? "color: {$sticky_btn_hover['font_color']} !important;" : '';
        $sticky_btn_hover_border_color = !empty($sticky_btn_hover['border_color']) ? "border-color: {$sticky_btn_hover['border_color']} !important;" : '';
        $sticky_btn_hover_shadow_color = !empty($sticky_btn_hover['shadow_color']) ? $sticky_btn_hover['shadow_color'] : '';
        $sticky_btn_hover_shadow_color = !empty($sticky_btn_hover_shadow_color) ? "-webkit-box-shadow: 2px 5px 20px 0px $sticky_btn_hover_shadow_color; box-shadow: 2px 5px 20px 0px $sticky_btn_hover_shadow_color;" : '';
        $sticky_btn_hover_shadow = (!empty($sticky_btn_hover['box_shadow']) && $sticky_btn_normal['box_shadow'] == '1') ? $sticky_btn_hover_shadow_color : 'box-shadow: none;';

        $dynamic_css = "
            .header-menu .theme-btn {
                $btn_font_size
                $btn_border_width
                $btn_border_radius_top_left 
                $btn_border_radius_top_right
                $btn_border_radius_bottom_right
                $btn_border_radius_bottom_left 
                $btn_normal_background_type
                $btn_normal_font_color
                $btn_normal_border_color
                $btn_normal_shadow
                $btn_shadow
            }
            
            .header-menu .theme-btn:hover {
                $btn_hover_font_color
                $btn_hover_border_color
                $btn_hover_shadow
                $btn_hover_background_type
            } 
            
            .navbar_fixed .theme-btn {
                $sticky_btn_normal_background_type
                $sticky_btn_normal_font_color 
                $sticky_btn_normal_border_color
                $sticky_btn_normal_shadow
            }
            
            .navbar_fixed .theme-btn:hover {
                $sticky_btn_hover_font_color
                $sticky_btn_hover_border_color
                $sticky_btn_hover_shadow
                $sticky_btn_hover_background_type
            }
        ";
    }


    //====================== Title Bar =====================//
    $banner_padding_top = get_field('banner_padding_top');
    $banner_padding_bottom = get_field('banner_padding_bottom');
    $banner_bg_color = get_field('banner_bg_color');
    $banner_bg_img = get_field('banner_bg_img');

    $banner_padding_top = !empty($banner_padding_top) ? "padding-top: {$banner_padding_top}px !important;" : '';
    $banner_padding_bottom = !empty($banner_padding_bottom) ? "padding-bottom: {$banner_padding_bottom}px !important;" : '';
    $banner_bg_color = !empty($banner_bg_color) ? "background-color: {$banner_bg_color} !important;" : '';
    $banner_bg_img = !empty($banner_bg_img) ? "background-image: url({$banner_bg_img}) !important;" : '';

    if ($banner_padding_top || $banner_padding_bottom || $banner_bg_color || $banner_bg_img) {
        $dynamic_css .= "
            .banca_page_banner .breadcrumb-widget, .banca_job_single .breadcrumb-widget {
                $banner_padding_top
                $banner_padding_bottom
                $banner_bg_img
            }
            .banca_page_banner .breadcrumb-widget::after, .banca_job_single .breadcrumb-widget::after {
                $banner_bg_color
            }    
        ";
    }


    //=============== Header Options =====================//
    // Top Menu Color settings
    $top_menu_colors = function_exists('get_field') ? get_field('top_menu_colors') : '';
    $top_menu_content_color = !empty($top_menu_colors['content_colors']) ? $top_menu_colors['content_colors'] : '';
    $top_menu_bg_color = !empty($top_menu_colors['background_color']) ? $top_menu_colors['background_color'] : '';

    if ($top_menu_content_color) {
        $dynamic_css .= "
            header .header-top .header-info-right ul li i, 
            header .header-top .header-info-right ul li a, 
            header .header-top .header-info-left {
                color: $top_menu_content_color;
            }
        ";
    }
    if ($top_menu_bg_color) {
        $dynamic_css .= "
            .header .header-top {
                background-color: $top_menu_bg_color;
            }
        ";
    } //End Top Menu Colors


    // Hamburger Menu Color settings
    $hamburger_menu = function_exists('get_field') ? get_field('hamburger_menu') : '';
    if ( !empty($hamburger_menu )) {
        $dynamic_css .= "
            .menu_toggle .hamburger span, .menu_toggle .hamburger-cross span {
                background: $hamburger_menu !important;
            }
        ";
    }

    // Main Menu Color settings
    $menu_colors = function_exists('get_field') ? get_field('menu_colors') : '';
    $menu_item_color = !empty($menu_colors['item_color']) ? $menu_colors['item_color'] : '';
    $menu_active_color = !empty($menu_colors['active_hover_color']) ? $menu_colors['active_hover_color'] : '';
    $menu_bg_color = !empty($menu_colors['background_color']) ? $menu_colors['background_color'] : '';

    if ($menu_item_color) {
        $dynamic_css .= "
            .header-menu .menu > .nav-item > .nav-link {
                color: $menu_item_color !important;
            }
        ";
    }
    if ($menu_active_color) {
        $dynamic_css .= "
            .header-menu .menu > .active.nav-item > .nav-link,
            .header-menu .menu > .nav-item > .nav-link:hover,
            .header-menu .menu > .nav-item > .nav-link.active {
                color: $menu_active_color !important;
            }
            
            .header-menu .menu > .active.nav-item > .nav-link::before {
                background-color: $menu_active_color !important;
            }
            
        ";
    }
    if ($menu_bg_color) {
        $dynamic_css .= "
            .header-menu.header-menu-3 {
                background-color: $menu_bg_color;
            }
        ";
    }


    // Main Menu Color settings
    $sticky_menu_colors = function_exists('get_field') ? get_field('sticky_menu_colors') : '';
    $sticky_menu_item_color = !empty($sticky_menu_colors['item_color']) ? $sticky_menu_colors['item_color'] : '';
    $sticky_menu_active_color = !empty($sticky_menu_colors['active_hover_color']) ? $sticky_menu_colors['active_hover_color'] : '';
    $sticky_menu_bg_color = !empty($sticky_menu_colors['background_color']) ? $sticky_menu_colors['background_color'] : '';

    if ($sticky_menu_item_color) {
        $dynamic_css .= "
            .header-menu.navbar_fixed.header-menu-3 .navbar .menu > .nav-item > .nav-link {
                color: $sticky_menu_item_color !important;
            }
        ";
    }
    if ($sticky_menu_active_color) {
        $dynamic_css .= "
            .header-menu.navbar_fixed.header-menu-3 .navbar .menu > .nav-item > .nav-link:hover,
            .header-menu.navbar_fixed.header-menu-3 .navbar .menu > .nav-item > .nav-link.active {
                color: $sticky_menu_active_color !important;
            }
        ";
    }
    if ($sticky_menu_bg_color) {
        $dynamic_css .= "
            .header-menu.navbar_fixed.header-menu-3 {
                background-color: $sticky_menu_bg_color !important;
            }
        ";
    }


    //============================  Footer Options  ==============================//
    $footer_bg_color = get_field('footer_bg_colors');
    if ($footer_bg_color) {
        $dynamic_css .= "
            .footer.footer-3 {
                background-color: $footer_bg_color;
            }
        ";
    }

}


/**
 * Options from Theme Settings
 */
if (class_exists('ReduxFrameworkPlugin')) {

    // Blog Archive Banner Image
    $blog_banner_image = !empty($opt['blog_banner_image']['url']) ? $opt['blog_banner_image']['url'] : '';
    if ($blog_banner_image) {
        $dynamic_css .= "
            .breadcrumb-widget.breadcrumb-widget-2 {
                background-image: url($blog_banner_image); 
            }
        ";
    }

    // Blog Single Banner Image
    $blog_single_banner_image = !empty($opt['blog_single_banner_image']['url']) ? $opt['blog_single_banner_image']['url'] : '';
    if ($blog_single_banner_image) {
        $dynamic_css .= "
            .breadcrumb-area .breadcrumb-widget {
                background-image: url($blog_single_banner_image); 
            }
        ";
    }

    // Page Banner Image
    $page_banner_image = !empty($opt['page_banner_image']['url']) ? $opt['page_banner_image']['url'] : '';
    if ($page_banner_image) {
        $dynamic_css .= "
            .banca_page_banner .breadcrumb-widget {
                background-image: url($page_banner_image); 
            }
        ";
    }

}

wp_add_inline_style('banca-root', $dynamic_css);