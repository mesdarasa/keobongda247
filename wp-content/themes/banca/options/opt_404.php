<?php
/**
 * 404 Pages settings
 */
Redux::set_section('banca_opt', array(
    'title'     => esc_html__( '404 Error Page', 'banca' ),
    'id'        => '404_0pt',
    'icon'      => 'dashicons dashicons-info',
    'fields'    => array(
        array(
            'title'     => esc_html__( 'Title Text', 'banca' ),
            'id'        => 'error_heading',
            'type'      => 'text',
            'default'   => esc_html__( "Error. We can’t find the page you’re looking for.", 'banca' ),
        ),

        array(
            'title'     => esc_html__( 'Subtitle', 'banca' ),
            'id'        => 'error_subtitle',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Sorry for the inconvenience. Go to our homepage or check out our latest collections for Fashion, Chair, Decoration...', 'banca' ),
        ),

        array(
            'title'     => esc_html__( 'Home Button Title', 'banca' ),
            'id'        => 'error_home_btn_label',
            'type'      => 'text',
            'default'   => esc_html__( 'Back to Home Page', 'banca' ),
        ),

        array(
            'id'          => 'btn_font_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Text Color', 'banca' ),
            'output'      => array(
                'color' => '.error_area .action_btn',
            ),
        ),

        array(
            'id'          => 'btn_bg_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Background Color', 'banca' ),
            'output'      => array(
                'background' => '.error_area .action_btn',
            ),
        ),

        array(
            'title'     => esc_html__( 'Background shape', 'banca' ),
            'subtitle'  => esc_html__( 'Upload here the default background shape image', 'banca' ),
            'id'        => 'error_bg_shape_image',
            'type'      => 'media',
            'compiler'  => true,
            'default'   => [
                'url' => BANCA_DIR_IMG.'/404/404_bg.png'
            ]
        ),
    )
));
