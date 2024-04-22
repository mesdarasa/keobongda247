<?php
Redux::set_section('banca_opt', array(
    'title'            => esc_html__( 'Typography', 'banca' ),
    'id'               => 'banca_typo_opt',
    'icon'             => 'dashicons dashicons-editor-textcolor',
    'fields'           => array(
        array(
            'id'        => 'typo_note',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Important Note:', 'banca' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'This tab contains general typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the Menu Settings tab.', 'banca' )
        ),

        array(
            'id'        => 'body_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'Body Typography', 'banca' ),
            'subtitle'  => esc_html__( 'These settings control the typography for the body text globally.', 'banca' ),
            'description' => sprintf (
                '%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                esc_html__( 'You can add your own custom font', 'banca' ),
                get_admin_url(null, 'edit-tags.php?taxonomy=dt_custom_fonts' ),
                esc_html__( 'here.', 'banca' ),
                esc_html__( 'You can get the custom fonts in the Typography\'s Font Family list.', 'banca' )
            ),
            'output'    => 'body'
        ),
    )
));


/*** Headers Typography ***/
Redux::set_section('banca_opt', array(
    'title'            => esc_html__( 'Headers Typography', 'banca' ),
    'id'               => 'headers_typo_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'        => 'typo_note_headers',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Important Note:', 'banca' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'This tab contains general typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the Menu Settings tab.', 'banca' )
        ),

        array(
            'id'        => 'h1_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Headers Typography', 'banca' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'banca' ),
            'output'    => 'h1, .breadcrumb-widget .breadcrumb-content h1'
        ),

        array(
            'id'        => 'h2_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Headers Typography', 'banca' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H2 Headers. The h2 title tag used in the most section title.', 'banca' ),
            'output'    => 'h2, .post-details-widget h2'
        ),
        array(
            'id'        => 'h3_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Headers Typography', 'banca' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H3 Headers.', 'banca' ),
            'output'    => 'h3, .blog_sidebar .sidebar_widget h3.c_head'
        ),

        array(
            'id'        => 'h4_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Headers Typography', 'banca' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H4 Headers.', 'banca' ),
            'output'    => 'h4, a h4.author_name'
        ),

        array(
            'id'        => 'h5_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Headers Typography', 'banca' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H5 Headers.', 'banca' ),
            'output'    => 'h5'
        ),

        array(
            'id'        => 'h6_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Headers Typography', 'banca' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H6 Headers.', 'banca' ),
            'output'    => 'h6'
        ),
    )
));