<?php
/**
 * Dark-Mode Settings
 */
Redux::set_section('banca_opt', array(
    'title' => esc_html__('Dark Mode', 'banca'),
    'id' => 'dark_mode_opt',
    'icon' => 'dashicons dashicons-star-half',
    'fields' => array(
        array(
            'title' => esc_html__('Dark Mode Switcher', 'banca'),
            'subtitle' => esc_html__('Show/Hide the Dark Mode Switcher on the Header navigation bar.', 'banca'),
            'id' => 'is_dark_switcher',
            'type' => 'switch',
            'on' => esc_html__('Show', 'banca'),
            'off' => esc_html__('Hide', 'banca'),
            'default' => false,
        ),
        array(
            'title' => esc_html__('Active Dark Mode', 'banca'),
            'subtitle' => esc_html__('Activate the Dark Mode by default.', 'banca'),
            'id' => 'is_dark_default',
            'type' => 'switch',
            'default' => false,
            'required' => array('is_dark_switcher', '!=', '1')
        ),


        array(
            'id'     => 'hostim_dark_bg',
            'type'   => 'color',
            'title'  => esc_html__('Dark Background Color', 'grostore'),
            'output'      => ':root',
            'output_mode' => '--hostim_dark_bg',
            'required' => array('is_dark_switcher', '!=', '1')
        ),
        array(
            'id'     => 'hostim_dark_gray_bg',
            'type'   => 'color',
            'title'  => esc_html__('Dark Gray Background Color', 'grostore'),
            'output'      => ':root',
            'output_mode' => '--hostim_dark_gray_bg',
            'required' => array('is_dark_switcher', '!=', '1')
        ),
    )
));
