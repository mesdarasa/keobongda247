<?php

// Footer settings
Redux::set_section('banca_opt', array(
	'title'     => esc_html__( 'Footer', 'banca' ),
	'id'        => 'banca_footer',
	'icon'      => 'dashicons dashicons-arrow-down-alt2',
    'fields'           => array(

        array(
            'title'     => esc_html__( 'Footer Style', 'banca' ),
            'subtitle'  => esc_html__( 'Select a Footer template from here. Leave the field empty to use the default footer.', 'banca' ),
            'id'        => 'footer_style',
            'type'      => 'select',
            'options'   => banca_get_postTitleArray( 'footer' )
        ),


        array(
            'title'     => esc_html__( 'Copyright Text', 'banca' ),
            'id'        => 'copyright_txt',
            'type'      => 'editor',
            'default'   => '© 2023 All Rights Reserved by Spider-themes',
            'args'    => array (
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
                'quicktags'     => true,
            )
        ),

        array(
            'title'     => esc_html__( 'Bottom Background Color', 'banca' ),
            'subtitle'  => esc_html__( 'Footer bottom background color', 'banca' ),
            'id'        => 'footer_btm_bg_color',
            'type'      => 'color',
            'output'    => array('.footer_bottom' ),
            'mode'      => 'background'
        ),

    )
));