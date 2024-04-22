<?php
Redux::set_section('banca_opt', array(
    'title' => esc_html__('General', 'banca'),
    'id' => 'general_settings',
    'icon' => 'dashicons dashicons-admin-generic',
));


/**
 * Pre-loader Settings
 */
Redux::set_section('banca_opt', array(
    'title' => esc_html__('Preloader', 'banca'),
    'id' => 'preloader_opt',
    'icon' => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'is_preloader',
            'type' => 'switch',
            'title' => esc_html__('Pre-loader', 'banca'),
            'on' => esc_html__('Enabled', 'banca'),
            'off' => esc_html__('Disabled', 'banca'),
            'default' => true,
        ),

        array(
            'title' => esc_html__('Enable Pre-loader on', 'banca'),
            'id' => 'preloader_pages',
            'type' => 'select',
            'options' => [
                'all' => esc_html__('All Pages', 'banca'),
                'specific_pages' => esc_html__('Specific Pages', 'banca'),
            ],
            'default' => 'all',
            'required' => array(
                array('is_preloader', '=', '1'),
            )
        ),

        array(
            'title' => esc_html__('Page IDs', 'banca'),
            'subtitle' => esc_html__("Input the multiple page IDs in comma separated format.", 'banca'),
            'desc' => sprintf(esc_html__('%s How to find page ID %s', 'banca'), '<a href="https://is.gd/xM75oQ" target="_blank">', '</a>'),
            'id' => 'preloader_page_ids',
            'type' => 'text',
            'required' => array(
                array('is_preloader', '=', '1'),
                array('preloader_pages', '=', 'specific_pages'),
            )
        ),

        /**
         * Preloader Logo
         */
        array(
            'title' => esc_html__('Enable Pre-loader on', 'banca'),
            'id' => 'pre_loader_type',
            'type' => 'select',
            'options' => [
                'logo' => esc_html__('Logo', 'banca'),
                'text' => esc_html__('Text', 'banca'),
            ],
            'default' => 'logo',
            'required' => array(
                array('is_preloader', '=', '1'),
            )
        ),

        array(
            'id' => 'preloader_logo',
            'type' => 'media',
            'title' => esc_html__('Pre-loader Logo', 'banca'),
            'compiler' => true,
            'default' => array(
                'url' => BANCA_DIR_IMG . '/logo/logo_sticky.png'
            ),
            'required' => array('pre_loader_type', '=', 'logo'),
        ),

        array(
            'id' => 'logo_title',
            'type' => 'text',
            'title' => esc_html__('Logo Title', 'banca'),
            'default' => get_bloginfo('name'),
            'required' => array('pre_loader_type', '=', 'text'),
        ),

        array(
            'required' => array('is_preloader', '=', '1'),
            'title' => esc_html__('Logo Title Typography', 'banca'),
            'id' => 'logo_title_typo',
            'type' => 'typography',
            'text-align' => false,
            'output' => '#preloader .round_spinner h4',
        ),

        /**
         * Preloader Title
         */
        array(
            'id' => 'preloader_title',
            'type' => 'text',
            'title' => esc_html__('Preloader Title', 'banca'),
            'required' => array('is_preloader', '=', '1'),
            'default' => 'Did You Know?'
        ),

        array(
            'required' => array('is_preloader', '=', '1'),
            'title' => esc_html__('Preloader Title Typography', 'banca'),
            'id' => 'preloader_title_typo',
            'type' => 'typography',
            'text-align' => false,
            'output' => '#preloader .head',
        ),

        /**
         * Preloader Quotes
         */
        array(
            'required' => array('is_preloader', '=', '1'),
            'id' => 'preloader_quotes',
            'type' => 'multi_text',
            'title' => esc_html__('Quotes', 'banca'),
            'subtitle' => esc_html__('The quotes will display randomly under the title.', 'banca'),
            'default' => 'Did You Know?'
        ),

        array(
            'required' => array('is_preloader', '=', '1'),
            'title' => esc_html__('Preloader Quotes Typography', 'banca'),
            'id' => 'preloader_quotes_typo',
            'type' => 'typography',
            'text-align' => false,
            'output' => '#preloader p',
        ),
    )
));


/**
 * Back to Top Button Settings
 */
Redux::set_section('banca_opt', array(
    'title' => esc_html__('Back to Top', 'banca'),
    'id' => 'back_to_top_btn',
    'icon' => '',
    'subsection' => true,
    'fields' => array(
        array(
            'title' => esc_html__('Back to Top Button', 'banca'),
            'subtitle' => esc_html__('Show/hide back to top button globally settings', 'banca'),
            'id' => 'is_back_to_top_btn_switcher',
            'type' => 'switch',
            'on' => esc_html__('Show', 'banca'),
            'off' => esc_html__('Hide', 'banca'),
            'default' => '1',
        ),

        /**
         * Button Normal Colors
         */
        array(
            'id' => 'normal_color_start',
            'type' => 'section',
            'title' => esc_html__('Normal Color', 'banca'),
            'indent' => true,
            'required' => array('is_back_to_top_btn_switcher', '=', 1)
        ),
        array(
            'title' => esc_html__('Icon Color', 'banca'),
            'id' => 'back_to_top_btn_icon_color',
            'type' => 'color',
            'output' => array(
                'color' => '#back-to-top::after'
            ),
        ),
        array(
            'title' => esc_html__('Background Color', 'banca'),
            'id' => 'back_to_top_btn_bg_color',
            'type' => 'color_rgba',
            'output' => array(
                'background-color' => '#back-to-top'
            ),
        ),
        array(
            'id' => 'normal_color_end',
            'type' => 'section',
            'indent' => true
        ),

        /**
         * Button Hover Colors
         */
        array(
            'id' => 'hover_color_start',
            'type' => 'section',
            'title' => esc_html__('Hover Color', 'banca'),
            'indent' => true,
            'required' => array('is_back_to_top_btn_switcher', '=', 1)
        ),
        array(
            'title' => esc_html__('Icon Color', 'banca'),
            'id' => 'back_to_top_btn_icon_hover_color',
            'type' => 'color',
            'output' => array(
                'color' => '#back-to-top:hover::after'
            ),
        ),
        array(
            'title' => esc_html__('Background Color', 'banca'),
            'id' => 'back_to_top_btn_bg_hover_color',
            'type' => 'color_rgba',
            'output' => array(
                'background-color' => '#back-to-top:hover'
            ),
        ),
        array(
            'id' => 'hover_color_end',
            'type' => 'section',
            'indent' => true
        ),
    )
));