<?php
// Shop page
Redux::set_section('banca_opt', array(
    'title'            => esc_html__( 'Shop', 'banca' ),
    'id'               => 'shop_opt',
    'icon'             => 'dashicons dashicons-cart',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Page title', 'banca' ),
            'subtitle'  => esc_html__( 'Give here the shop page title', 'banca' ),
            'desc'      => esc_html__( 'This text will show on the shop page banner', 'banca' ),
            'id'        => 'shop_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Shop', 'banca' ),
        ),

        array(
            'title'     => esc_html__( 'Shop Page Subtitle', 'banca' ),
            'id'        => 'shop_subtitle',
            'type'      => 'textarea',
        ),

        array(
            'title'     => esc_html__( 'Layout', 'banca' ),
            'subtitle'  => esc_html__( 'Select the product view layout', 'banca' ),
            'id'        => 'shop_layout',
            'type'      => 'image_select',
            'options'   => array(
                'shop_list' => array(
                    'alt' => esc_html__( 'List Layout', 'banca' ),
                    'img' => BANCA_DIR_IMG.'/layouts/list.jpg'
                ),
                'shop_grid' => array(
                    'alt' => esc_html__( 'Grid Layout', 'banca' ),
                    'img' => BANCA_DIR_IMG.'/layouts/grid.jpg'
                ),
            ),
            'default' => 'shop_grid'
        ),

        array(
            'title'     => esc_html__( 'Sidebar', 'banca' ),
            'subtitle'  => esc_html__( 'Select the sidebar position of Shop page', 'banca' ),
            'id'        => 'shop_sidebar',
            'type'      => 'image_select',
            'options'   => array(
                'left' => array(
                    'alt' => esc_html__( 'Left Sidebar', 'banca' ),
                    'img' => BANCA_DIR_IMG.'/layouts/sidebar_left.jpg'
                ),
                'right' => array(
                    'alt' => esc_html__( 'Right Sidebar', 'banca' ),
                    'img' => BANCA_DIR_IMG.'/layouts/sidebar_right.jpg',
                ),
                'full' => array(
                    'alt' => esc_html__( 'Full Width', 'banca' ),
                    'img' => BANCA_DIR_IMG.'/layouts/list.jpg',
                ),
            ),
            'default' => 'left'
        ),
    ),
));


// Product Single Options
Redux::set_section('banca_opt', array(
    'title'            => esc_html__( 'Product Single', 'banca' ),
    'id'               => 'product_single_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Related Products Title', 'banca' ),
            'id'        => 'related_products_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Related products', 'banca' ),
        ),
        array(
            'title'     => esc_html__( 'Related Products Subtitle', 'banca' ),
            'id'        => 'related_products_subtitle',
            'type'      => 'textarea',
        ),
    )
));

/**
 * Shop Title-bar
 */
Redux::set_section('banca_opt', array(
    'title'     => esc_html__( 'Shop Banner', 'banca' ),
    'id'        => 'shop_banner_opt',
    'icon'      => '',
    'subsection' => true,
    'fields'    => array(

        array(
            'title'     => esc_html__( 'Title-bar padding', 'banca' ),
            'subtitle'  => esc_html__( 'Padding around the Title-bar.', 'banca' ),
            'id'        => 'shop_title_bar_padding',
            'type'      => 'spacing',
            'output'    => array( '.breadcrumb_area_three' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ), // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'id'       => 'shop_titlebar_align',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Alignment', 'banca' ),
            'options' => array(
                'left' => esc_html__( 'Left', 'banca' ),
                'center' => esc_html__( 'Center', 'banca' ),
                'right' => esc_html__( 'Right', 'banca' )
            ),
            'default' => 'center'
        ),
    )
));