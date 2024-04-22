<?php
Redux::set_section('banca_opt', array(
    'title'     => esc_html__( 'Social links', 'banca' ),
    'id'        => 'opt_social_links',
    'icon'      => 'dashicons dashicons-share',
    'fields'    => array(

        array(
            'id'        => 'facebook',
            'type'      => 'text',
            'title'     => esc_html__( 'Facebook', 'banca' ),
            'default'	=> '#'
        ),

        array(
            'id'        => 'twitter',
            'type'      => 'text',
            'title'     => esc_html__( 'Twitter', 'banca' ),
            'default'	=> '#'
        ),

        array(
            'id'        => 'pinterest',
            'type'      => 'text',
            'title'     => esc_html__( 'Instagram', 'banca' ),
            'default'	=> '#'
        ),

        array(
            'id'        => 'linkedin',
            'type'      => 'text',
            'title'     => esc_html__( 'LinkedIn', 'banca' ),
            'default'	=> '#'
        ),
    ),
));