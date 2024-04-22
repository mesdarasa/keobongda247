<?php
// Color option
Redux::set_section('banca_opt', array(
    'title' => esc_html__('Color Scheme', 'banca'),
    'id' => 'color',
    'icon' => 'dashicons dashicons-admin-appearance',
    'fields' => array(
        array(
            'id' => 'accent_solid_color_opt',
            'type' => 'color',
            'title' => esc_html__('Accent Color', 'banca'),
            'output_variables' => true,
            'default' => '#0050b2',
        ),
        array(
            'id' => 'secondary_color_opt',
            'type' => 'color',
            'title' => esc_html__('Secondary Color', 'banca'),
            'subtitle' => esc_html__('Normally used in Titles', 'banca'),
            'output_variables' => true,
            'default' => '#171d24',
        ),
        array(
            'id' => 'paragraph_color_opt',
            'type' => 'color',
            'title' => esc_html__('Paragraph Color', 'banca'),
            'subtitle' => esc_html__('Normally used in meta content, paragraph, subtitles, icon', 'banca'),
            'output_variables' => true,
            'default' => '#4c5267',
        ),

    )
));

