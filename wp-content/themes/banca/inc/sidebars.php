<?php
// Register Widget areas
add_action('widgets_init', function () {

    register_sidebar(array(
        'name' => esc_html__('Primary Sidebar', 'banca'),
        'description' => esc_html__('Place widgets in sidebar widgets area.', 'banca'),
        'id' => 'sidebar_widgets',
        'before_widget' => '<div id="%1$s" class="widget sidebar_widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="c_head">',
        'after_title' => '</h3>'
    ));

    //=========================== Job Sidebar =========================//
    register_sidebar(array(
        'name' => esc_html__('Job Sidebar', 'banca'),
        'description' => esc_html__('Place widgets in sidebar widgets area.', 'banca'),
        'id' => 'job_sidebar_widgets',
        'before_widget' => '<div id="%1$s" class="job_sidebar_widget single-sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title"><h5>',
        'after_title' => '</h3></div>'
    ));

    //=========================== Shop Sidebar =========================//
    if (class_exists('WooCommerce')) {
        register_sidebar(array(
            'name' => esc_html__('Shop sidebar', 'landpagy'),
            'description' => esc_html__('Place widgets here for WooCommerce shop page.', 'landpagy'),
            'id' => 'shop_sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="sp_widget_title">',
            'after_title' => '</h3>'
        ));
    }

});
