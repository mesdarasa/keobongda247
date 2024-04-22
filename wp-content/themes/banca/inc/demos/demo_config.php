<?php
// Disable regenerating images while importing media
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

// OneClick Demo Importer
add_filter( 'pt-ocdi/import_files', 'banca_import_files' );


function banca_import_files() {
    return array(

        array(
            'import_file_name'             => esc_html__( 'Smart Finance', 'banca' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/all/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/all/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/all/img/smart_finance.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button.', 'banca' ),
            'preview_url'                  => 'https://wordpress-theme.spider-themes.net/banca/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/theme-settings.json',
                    'option_name' => 'banca_opt',
                ),
            ),
        ),

        array(
            'import_file_name'             => esc_html__( 'Finance Sass App', 'banca' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/all/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/all/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/all/img/finance_sass_app.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button.', 'banca' ),
            'preview_url'                  => 'https://wordpress-theme.spider-themes.net/banca/finance-sass-app/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/theme-settings.json',
                    'option_name' => 'banca_opt',
                ),
            ),
        ),

        array(
            'import_file_name'             => esc_html__( 'Small Bank', 'banca' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/all/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/all/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/all/img/small_bank.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button.', 'banca' ),
            'preview_url'                  => 'https://wordpress-theme.spider-themes.net/banca/small-bank/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/theme-settings.json',
                    'option_name' => 'banca_opt',
                ),
            ),
        ),

        array(
            'import_file_name'             => esc_html__( 'Loan Company', 'banca' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/all/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/all/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/all/img/loan_company.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button.', 'banca' ),
            'preview_url'                  => 'https://wordpress-theme.spider-themes.net/banca/loan-company/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/theme-settings.json',
                    'option_name' => 'banca_opt',
                ),
            ),
        ),


        array(
            'import_file_name'             => esc_html__( 'Simple Banca', 'banca' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/all/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/all/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/all/img/simple_banca.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button.', 'banca' ),
            'preview_url'                  => 'https://wordpress-theme.spider-themes.net/banca/simple-banca/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/theme-settings.json',
                    'option_name' => 'banca_opt',
                ),
            ),
        ),

        array(
            'import_file_name'             => esc_html__( 'Loan Steps', 'banca' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/all/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/all/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/all/img/loan_steps.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button.', 'banca' ),
            'preview_url'                  => 'https://wordpress-theme.spider-themes.net/banca/loan-steps/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/theme-settings.json',
                    'option_name' => 'banca_opt',
                ),
            ),
        ),

        array(
            'import_file_name'             => esc_html__( 'Mobile App', 'banca' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/all/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/all/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/all/img/mobile_app.png',
            'import_notice'                => esc_html__( 'Install and active all required plugins before you click on the "Import Demo Data" button.', 'banca' ),
            'preview_url'                  => 'https://wordpress-theme.spider-themes.net/banca/mobile-app/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/all/theme-settings.json',
                    'option_name' => 'banca_opt',
                ),
            ),
        ),


    );
}

function banca_after_import_setup( $selected_import ) {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array (
            'main_menu' => $main_menu->term_id,
        )
    );

    // Disable Elementor's Default Colors and Default Fonts
    update_option( 'elementor_disable_color_schemes', 'yes' );
    update_option( 'elementor_disable_typography_schemes', 'yes' );
    update_option( 'elementor_global_image_lightbox', '' );


    // Assign front page and posts page (blog page).
    if ( 'Smart Finance' == $selected_import['import_file_name'] ) {
        $front_page_id = banca_get_page_title( 'Home – Smart Finance' );
    }
    if ( 'Finance Sass App' == $selected_import['import_file_name'] ) {
        $front_page_id = banca_get_page_title( 'Home - Finance Sass App' );
    }
    if ( 'Small Bank' == $selected_import['import_file_name'] ) {
        $front_page_id = banca_get_page_title( 'Home - Small Bank' );
    }
    if ( 'Loan Company' == $selected_import['import_file_name'] ) {
        $front_page_id = banca_get_page_title( 'Home - Loan Company' );
    }
    if ( 'Simple Banca' == $selected_import['import_file_name'] ) {
        $front_page_id = banca_get_page_title( 'Home - Simple Banca' );
    }
    if ( 'Loan Steps' == $selected_import['import_file_name'] ) {
        $front_page_id = banca_get_page_title( 'Home - Loan Steps' );
    }
    if ( 'Mobile App' == $selected_import['import_file_name'] ) {
        $front_page_id = banca_get_page_title( 'Home - Mobile App' );
    }

    $blog_page_id  = banca_get_page_title( 'Blog' );


    // Set the home page and blog page
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id );
    update_option( 'page_for_posts', $blog_page_id );


    //Default Widgets None
    update_option( 'widget_recent-posts', 'no' );
    update_option( 'widget_recent-comments', 'no' );
    update_option( 'widget_meta', 'no' );

}
add_action( 'pt-ocdi/after_import', 'banca_after_import_setup' );