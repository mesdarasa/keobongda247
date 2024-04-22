<?php

// Navbar styling
Redux::set_section( 'banca_opt', array(
    'title'            => esc_html__( 'Menu', 'banca' ),
    'id'               => 'menu_opt',
    'icon'             => 'el el-lines',
));

/**
 * Main Menu styling
 */
Redux::set_section( 'banca_opt', array(
    'title'            => esc_html__( 'Classic Menu', 'banca' ),
    'id'               => 'main_menu_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'title'     => esc_html__( 'Navbar Meu Alignment', 'banca' ),
            'id'        => 'menu_align',
            'type'      => 'button_set',
            'options'   => array(
                'left' => esc_html__( 'Left', 'banca' ),
                'center' => esc_html__( 'Center', 'banca' ),
                'right' => esc_html__( 'Right', 'banca' ),
            ),
            'default' => 'right'
        ),


        // Normal menu settings section
        array(
            'id'        => 'normal_menu_start',
            'type'      => 'section',
            'title'     => esc_html__( 'Normal menu colors', 'banca' ),
            'subtitle'  => esc_html__( 'The following settings will only apply on the normal header mode..', 'banca' ),
            'indent'    => true
        ),

        array(
            'title'         => esc_html__( 'Item Color', 'banca' ),
            'subtitle'      => esc_html__( 'This is the menu item font color.', 'banca' ),
            'id'            => 'menu_normal_font_color',
            'type'          => 'color',
            'output'        => array (
                'color'      => '.header-menu .menu > .nav-item > .nav-link',
            ),
        ),

        array(
            'title'     => esc_html__( 'Item Hover Color', 'banca' ),
            'subtitle'  => esc_html__( 'Menu item\'s font color on hover stats.', 'banca' ),
            'id'        => 'menu_normal_hover_font_color',
            'type'      => 'color',
            'output'    => array(
                'color'   => '.header-menu .menu > .nav-item > .nav-link:hover',
            ),
        ),

        array(
            'title'     => esc_html__( 'Item Active Color', 'banca' ),
            'subtitle'  => esc_html__( 'Menu item\'s font color on active stats.', 'banca' ),
            'id'        => 'menu_normal_item_active_color',
            'output'    => array(
                'color' => '.header-menu .menu > .active.nav-item > .nav-link',
                'background-color'  => '.header-menu .menu > .active.nav-item > .nav-link::before',
            ),
            'type'      => 'color',
        ),

        array(
            'id'     => 'normal_menu_end',
            'type'   => 'section',
            'indent' => false,
        ),

        // Sticky menu settings section
        array(
            'id'        => 'sticky_menu_start',
            'type'      => 'section',
            'title'     => esc_html__( 'Sticky menu colors', 'banca' ),
            'subtitle'  => esc_html__( 'The following settings will only apply on the sticky header mode..', 'banca' ),
            'indent'    => true
        ),

        array(
            'title'         => esc_html__( 'Menu Color', 'banca' ),
            'subtitle'      => esc_html__( 'Menu item font color on sticky menu mode.', 'banca' ),
            'id'            => 'sticky_menu_font_color',
            'type'          => 'color',
            'output'        => array (
                'color'     => '.header-menu.navbar_fixed .menu > .nav-item > .nav-link',
            ),
        ),

        array(
            'title'     => esc_html__( 'Menu Hover Color', 'banca' ),
            'subtitle'  => esc_html__( 'Menu item hover font color on header sticky mode', 'banca' ),
            'id'        => 'menu_sticky_hover_font_color',
            'type'      => 'color',
            'output'    => array(
                'color' => '.header-menu.navbar_fixed .menu > .nav-item > .nav-link:hover',
            ),
        ),

        array(
            'title'     => esc_html__( 'Menu Active Color', 'banca' ),
            'subtitle'  => esc_html__( 'Menu item active font color on header sticky mode', 'banca' ),
            'id'        => 'menu_sticky_active_font_color',
            'output'    => array(
                'color' => '.header-menu.navbar_fixed .menu > .active.nav-item > .nav-link',
                'background-color'  => '.header-menu.navbar_fixed .menu > .active.nav-item > .nav-link::before',
            ),
            'type'      => 'color',
        ),

        array(
            'id'     => 'sticky_menu_end',
            'type'   => 'section',
            'indent' => false,
        ),


        // Menu item padding and margin options
        array(
            'title'     => esc_html__( 'Menu item padding', 'banca' ),
            'subtitle'  => esc_html__( 'Padding around menu item. Default is 37px 0px 37px 0px. You can reduce the top and bottom padding to make the menu bar height smaller.', 'banca' ),
            'id'        => 'menu_item_padding',
            'type'      => 'spacing',
            'output'    => array( '.header-menu .menu > .nav-item + .nav-item' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Menu item margin', 'banca' ),
            'subtitle'  => esc_html__( 'Margin around menu item.', 'banca' ),
            'id'        => 'menu_item_margin',
            'type'      => 'spacing',
            'output'    => array( '.header-menu .menu > .nav-item + .nav-item' ),
            'mode'      => 'margin',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Hamburger Menu Color', 'banca' ),
            'id'        => 'hamburger_menu_color',
            'output'    => array(
                'background-color'  => '.menu_toggle .hamburger span, .menu_toggle .hamburger-cross span',
            ),
            'type'      => 'color',
        ),

    )
));