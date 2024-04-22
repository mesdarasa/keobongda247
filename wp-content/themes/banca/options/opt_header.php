<?php
// Header Section
Redux::set_section( 'banca_opt', array(
    'title'            => esc_html__( 'Header', 'banca' ),
    'id'               => 'header_sec',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-arrow-up-alt2',
));


// Logo
Redux::set_section( 'banca_opt', array(
    'title'            => esc_html__( 'Logo', 'banca' ),
    'id'               => 'logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Main Logo', 'banca' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'banca' ),
            'id'        => 'main_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => BANCA_DIR_IMG.'/logo/logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky Logo', 'banca' ),
            'id'        => 'sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => BANCA_DIR_IMG.'/logo/logo_sticky.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Main Logo', 'banca' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'banca' ),
            'id'        => 'retina_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => BANCA_DIR_IMG.'/logo/retina_logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'banca' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'banca' ),
            'id'        => 'retina_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => BANCA_DIR_IMG.'/logo/retina_logo_sticky.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'banca' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'banca' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.navbar-brand>img'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'banca' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'banca' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.header_area .navbar-brand' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );



/**
 * Top Header
 */
Redux::set_section( 'banca_opt', array(
	'title'            => esc_html__( 'Top Header', 'banca' ),
	'id'               => 'top_header_opt',
	'subsection'       => true,
	'icon'             => '',
	'fields'           => array(

		array(
			'title'     => esc_html__( 'Top Header Visibility', 'banca' ),
			'id'        => 'is_top_header',
			'type'      => 'switch',
			'on'        => esc_html__( 'Show', 'banca' ),
			'off'       => esc_html__( 'Hide', 'banca' ),
			'default'   => true,
		),

		array(
			'title'     => esc_html__( 'Schedule', 'banca' ),
			'id'        => 'top_header_schedule',
			'type'      => 'text',
			'default'   => esc_html__( 'Mon - Fri 10:00-18:00', 'banca' ),
			'required'  => array( 'is_top_header', '=', '1' )
		),

		array(
			'title'     => esc_html__( 'Contact Info', 'banca' ),
			'id'        => 'top_header_contact_no',
			'type'      => 'text',
			'default'   => esc_html__( '+447911123456', 'banca' ),
			'required'  => array( 'is_top_header', '=', '1' )
		),

		array(
			'title'     => esc_html__( 'Email Address', 'banca' ),
			'id'        => 'top_header_email',
			'type'      => 'text',
			'default'   => esc_html__( 'bancainfo@email.com', 'banca' ),
			'required'  => array( 'is_top_header', '=', '1' )
		),

        array(
            'title'     => esc_html__( 'Text Color', 'banca' ),
            'id'        => 'top_header_text_color',
            'type'      => 'color',
            'required'  => array( 'is_top_header', '=', '1' )
        ),

	),
));


// Logo
Redux::set_section( 'banca_opt', array(
    'title'            => esc_html__( 'Header Styling', 'banca' ),
    'id'               => 'header_styling_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'title'     => esc_html__( 'Header Width', 'banca' ),
            'subtitle'  => esc_html__( 'Set the default Header width here. It will apply on the theme\'s Header globally.', 'banca' ),
            'id'        => 'header_width',
            'type'      => 'button_set',
            'options'   => array(
                'boxed' => esc_html__('Boxed', 'banca'),
                'full-width' => esc_html__('Full Width', 'banca'),
            ),
            'default' => 'boxed'
        ),

        array(
            'title'     => esc_html__( 'Sticky Navbar', 'banca' ),
            'id'        => 'is_header_sticky',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1'
        ),

        array(
            'title'     => esc_html__( 'Sticky Appearance', 'banca' ),
            'subtitle'  => esc_html__( 'Set the sticky appearance based on scrolling states.', 'banca' ),
            'id'        => 'sticky_appearance',
            'type'      => 'button_set',
            'options'   => array(
                'stick_all' => esc_html__('Stick all Time', 'banca'),
                'stick_up' => esc_html__('Stick on Up Scrolling', 'banca'),
            ),
            'default' => 'stick_up',
            'required'  => array( 'is_header_sticky', '=', '1' )
        ),

    ),
));


/**
 * Action button
 */
Redux::set_section( 'banca_opt', array(
    'title'            => esc_html__( 'Action Button', 'banca' ),
    'id'               => 'menu_action_btn_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Button Visibility', 'banca' ),
            'id'        => 'is_menu_btn',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
        ),

        array(
            'title'     => esc_html__( 'Button label', 'banca' ),
            'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'banca' ),
            'id'        => 'menu_btn_label',
            'type'      => 'text',
            'default'   => esc_html__( 'Sign in', 'banca' ),
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),

        array(
            'title'     => esc_html__( 'Button URL', 'banca' ),
            'id'        => 'menu_btn_url',
            'type'      => 'text',
            'default'   => '#',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),

        array(
            'title'     => esc_html__( 'Button URL Target', 'banca' ),
            'id'        => 'menu_btn_target',
            'type'      => 'select',
            'options'   => array(
            	'_blank' => esc_html__( 'Blank (Open in new tab)', 'banca' ),
            	'_self' => esc_html__( 'Self (Open in the same tab)', 'banca' ),
            ),
            'default'   => '_self',
            'required'  => array( 'is_menu_btn', '=', '1' )
        ),

	    array(
		    'title'     => esc_html__( 'Button padding', 'banca' ),
		    'subtitle'  => esc_html__( 'Padding around the menu action button.', 'banca' ),
		    'id'        => 'menu_btn_padding',
		    'type'      => 'spacing',
		    'output'    => array( '.nav_btn' ),
		    'mode'      => 'padding',
		    'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
		    'units_extended' => 'true',
		    'required'  => array( 'is_menu_btn', '=', '1' )
	    ),

        /**
         * Button colors
         * Style will apply on the Non sticky mode and sticky mode of the header
         */
        array(
            'title'     => esc_html__( 'Button Colors', 'banca' ),
            'subtitle'  => esc_html__( 'Button style attributes on normal (non sticky) mode.', 'banca' ),
            'id'        => 'button_colors',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'is_menu_btn', '=', '1' ),
        ),

        array(
            'title'     => esc_html__( 'Font color', 'banca' ),
            'id'        => 'menu_btn_font_color',
            'type'      => 'color',
            'output'    => array( '.navbar .nav_btn' ),
        ),
        
        array(
            'title'     => esc_html__( 'Border Color', 'banca' ),
            'id'        => 'menu_btn_border_color',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.navbar .nav_btn' ),
        ),
        
        array(
            'title'     => esc_html__( 'Background Color', 'banca' ),
            'id'        => 'menu_btn_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.navbar .nav_btn' ),
        ),

        // Button color on hover stats
        array(
            'title'     => esc_html__( 'Hover Font Color', 'banca' ),
            'subtitle'  => esc_html__( 'Font color on hover stats.', 'banca' ),
            'id'        => 'menu_btn_hover_font_color',
            'type'      => 'color',
            'output'    => array( '.navbar .nav_btn:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover Border Color', 'banca' ),
            'id'        => 'menu_btn_hover_border_color',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.navbar .nav_btn:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover background color', 'banca' ),
            'subtitle'  => esc_html__( 'Background color on hover stats.', 'banca' ),
            'id'        => 'menu_btn_hover_bg_color',
            'type'      => 'color',
            'output'    => array(
                'background' => '.navbar .nav_btn:hover',
                'border-color' => '.navbar_fixed .navbar .nav_btn:hover'
            ),
        ),

        array(
            'id'     => 'button_colors-end',
            'type'   => 'section',
            'indent' => false,
        ),

        /*
         * Button colors on sticky mode
         */
        array(
            'title'     => esc_html__( 'Sticky Button Style', 'banca' ),
            'subtitle'  => esc_html__( 'Button colors on sticky mode.', 'banca' ),
            'id'        => 'button_colors_sticky',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'is_menu_btn', '=', '1' ),
        ),
        array(
            'title'     => esc_html__( 'Border color', 'banca' ),
            'id'        => 'menu_btn_border_color_sticky',
            'type'      => 'color',
            'mode'      => 'border-color',
            'output'    => array( '.navbar.navbar_fixed .nav_btn' ),
        ),
        array(
            'title'     => esc_html__( 'Font color', 'banca' ),
            'id'        => 'menu_btn_font_color_sticky',
            'type'      => 'color',
            'output'    => array( '.navbar_fixed.navbar .nav_btn' ),
        ),
        array(
            'title'     => esc_html__( 'Background color', 'banca' ),
            'id'        => 'menu_btn_bg_color_sticky',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.navbar_fixed.navbar .nav_btn' ),
        ),

        // Button color on hover stats
        array(
            'title'     => esc_html__( 'Hover font color', 'banca' ),
            'subtitle'  => esc_html__( 'Font color on hover stats.', 'banca' ),
            'id'        => 'menu_btn_hover_font_color_sticky',
            'type'      => 'color',
            'output'    => array( '.navbar.navbar_fixed .nav_btn:hover' ),
        ),
        array(
            'title'     => esc_html__( 'Hover background color', 'banca' ),
            'subtitle'  => esc_html__( 'Background color on hover stats.', 'banca' ),
            'id'        => 'menu_btn_hover_bg_color_sticky',
            'type'      => 'color',
            'output'    => array(
                'background' => '.navbar.navbar_fixed .nav_btn:hover',
            ),
        ),
        array(
            'title'     => esc_html__( 'Hover border color', 'banca' ),
            'subtitle'  => esc_html__( 'Background color on hover stats.', 'banca' ),
            'id'        => 'menu_btn_hover_border_color_sticky',
            'type'      => 'color',
            'output'    => array(
                'border-color' => '.navbar.navbar_fixed .nav_btn:hover',
            ),
        ),

        array(
            'id'     => 'button_colors-sticky-end',
            'type'   => 'section',
            'indent' => false,
        ),
    )
));

/**
 * Title-bar banner
 */
Redux::set_section( 'banca_opt', array(
    'title'            => esc_html__( 'Title-bar', 'banca' ),
    'id'               => 'title_bar_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'title'     => esc_html__( 'Title-bar padding', 'banca' ),
            'subtitle'  => esc_html__( 'Padding around the Title-bar.', 'banca' ),
            'id'        => 'title_bar_padding',
            'type'      => 'spacing',
            'output'    => array( '.banca_page_banner .breadcrumb-widget' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        // Page Banner Background Image
        array(
            'id'          => 'page_banner_image',
            'type'        => 'media',
            'title'       => __('Banner Image', 'banca'),
            'default'     => [
                'url'     => BANCA_DIR_IMG . '/banner/page_banner.jpg',
            ]
        ),

        array(
            'id'       => 'titlebar_align',
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