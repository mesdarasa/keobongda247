<?php
Redux::set_section('banca_opt', array(
	'title'     => esc_html__( 'Blog Pages', 'banca' ),
	'id'        => 'blog_page',
	'icon'      => 'dashicons dashicons-admin-post',
));


/**
 * Blog archive settings
 */
Redux::set_section('banca_opt', array(
	'title'     => esc_html__( 'Title Bar', 'banca' ),
	'id'        => 'blog_title_bar_opt',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(

		array(
			'title'     => esc_html__( 'Blog page title', 'banca' ),
			'subtitle'  => esc_html__( 'Controls the title text that displays in the page title bar only if your front page displays your latest post in "Settings > Reading".', 'banca' ),
			'id'        => 'blog_title',
			'type'      => 'text',
			'default'   => esc_html__( 'Blog List', 'banca' )
		),

		array(
			'id'          => 'blog_title_bar_cats',
			'type'        => 'slides',
			'title'       => __('Popular Category Name', 'banca'),
			'desc'        => __('You can set a popular category search form to the blog title bar.', 'banca'),
			'placeholder' => array(
				'title'   => __('Category Title', 'banca'),
				'url'     => __('Category Link', 'banca'),
			),
			'show'        => array(
				'title'         => true,
				'description'   => false,
				'url'           => true
			),
		),

		array(
			'id'          => 'blog_banner_image',
			'type'        => 'media',
			'title'       => __('Banner Image', 'banca'),
			'default'     => [
				'url'     => BANCA_DIR_IMG . '/blog/banner.jpg',
			]
		),

        array(
            'title'     => esc_html__( 'Padding', 'banca' ),
            'subtitle'  => esc_html__( 'Padding around the blog title bar. Input the padding as clockwise (Top Right Bottom Left)', 'banca' ),
            'id'        => 'blog_title_bar_padding',
            'type'      => 'spacing',
            'output'    => array( '.blog_single_banner .breadcrumb-widget, .blog_banner_animation .breadcrumb-widget' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

	),
));

/**
 * Blog archive settings
 */
Redux::set_section('banca_opt', array(
	'title'     => esc_html__( 'Blog archive', 'banca' ),
	'id'        => 'blog_meta_opt',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(

        array(
            'title'     => esc_html__( 'Column', 'banca' ),
            'id'        => 'blog_column',
            'type'      => 'select',
            'options'   => [
                '6' => esc_html__( 'Two', 'banca' ),
                '4' => esc_html__( 'Three', 'banca' ),
                '3' => esc_html__( 'Four', 'banca' ),
            ],
            'default'   => '6',
        ),

        array(
            'title'     => esc_html__( 'Post title length', 'banca' ),
            'subtitle'  => esc_html__( 'Blog post title length in character', 'banca' ),
            'id'        => 'post_title_length',
            'type'      => 'slider',
            'default'   => 50,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text',
        ),

        array(
            'title'     => esc_html__( 'Post word excerpt', 'banca' ),
            'subtitle'  => esc_html__( 'If post excerpt empty, the excerpt content will take from the post content. Define here how much word you want to show along with the each posts in the blog page.', 'banca' ),
            'id'        => 'blog_excerpt',
            'type'      => 'slider',
            'default'   => 40,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text'
        ),

        array(
            'title'     => esc_html__( 'Continue Reading Label', 'banca' ),
            'id'        => 'blog_continue_read',
            'type'      => 'text',
            'default'   => esc_html__( 'Continue Reading', 'banca' ),
        ),

		array(
			'title'     => esc_html__( 'Post meta', 'banca' ),
			'subtitle'  => esc_html__( 'Show/hide post meta on blog archive page', 'banca' ),
			'id'        => 'is_post_meta',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
		),

		array(
			'title'     => esc_html__( 'Post date', 'banca' ),
			'id'        => 'is_post_date',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_post_meta', '=', 1 )
		),

		array(
			'title'     => esc_html__( 'Post Reading Time', 'banca' ),
			'id'        => 'is_post_reading_time',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_post_meta', '=', 1 )
		),

		array(
			'title'     => esc_html__( 'Post category', 'banca' ),
			'id'        => 'is_post_cat',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_post_meta', '=', 1 )
		),

		array(
			'title'     => esc_html__( 'Author', 'banca' ),
			'id'        => 'is_post_author',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_post_meta', '=', 1 )
		),
	)
));

/**
 * Post single
 */
Redux::set_section('banca_opt', array(
	'title'     => esc_html__( 'Blog single', 'banca' ),
	'id'        => 'blog_single_opt',
	'icon'      => '',
	'subsection' => true,
	'fields'    => array(
        array(
            'title'     => esc_html__( 'Title Color', 'banca' ),
            'id'        => 'blog_single_banner_title_color',
            'output'    => '.breadcrumb_content h2',
            'type'      => 'color',
            'mode'      => 'color'
        ),
		array(
			'title'     => esc_html__( 'Social Share', 'banca' ),
			'id'        => 'is_social_share',
			'type'      => 'switch',
            'on'        => esc_html__( 'Enabled', 'banca' ),
            'off'       => esc_html__( 'Disabled', 'banca' ),
            'default'   => '1'
		),
		array(
			'title'     => esc_html__( 'Social Share', 'banca' ),
			'id'        => 'share_title',
			'type'      => 'text',
            'default'   => esc_html__( 'Share This Article', 'banca' ),
            'required'  => array('is_social_share', '=', '1')
		),
		array(
			'title'     => esc_html__( 'Post Tag', 'banca' ),
			'id'        => 'is_post_tag',
			'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1'
		),
        array(
            'title'     => esc_html__( 'Post meta', 'banca' ),
            'subtitle'  => esc_html__( 'Show/hide post meta on blog single page', 'banca' ),
            'id'        => 'is_single_post_meta',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
        ),
        array(
            'title'     => esc_html__( 'Categories', 'banca' ),
            'id'        => 'is_single_cats',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_single_post_meta', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Post Author Name', 'banca' ),
            'id'        => 'is_single_post_author',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_single_post_meta', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Comment Count Text', 'banca' ),
            'id'        => 'is_single_comment_meta',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_single_post_meta', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Post Date', 'banca' ),
            'id'        => 'is_single_post_date',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
            'default'   => '1',
            'required' => array( 'is_single_post_meta', '=', 1 )
        ),
        array(
            'title'     => esc_html__( 'Related posts ', 'banca' ),
            'id'        => 'is_related_posts',
            'type'      => 'switch',
            'on'        => esc_html__( 'Show', 'banca' ),
            'off'       => esc_html__( 'Hide', 'banca' ),
        ),
        array(
            'title'     => esc_html__( 'Posts section title', 'banca' ),
            'id'        => 'related_posts_title',
            'type'      => 'text',
            'default'   => esc_html__( 'Related Post', 'banca' ),
            'required'  => array('is_related_posts', '=', '1' )
        ),
        array(
            'title'     => esc_html__( 'Related posts count', 'banca' ),
            'id'        => 'related_posts_count',
            'type'      => 'slider',
            'default'       => 2,
            'min'           => 0,
            'step'          => 1,
            'max'           => 50,
            'required'  => array('is_related_posts', '=', '1' )
        ),


        // Banner Background Image
        array(
            'id'          => 'blog_single_banner_image',
            'type'        => 'media',
            'title'       => __('Banner Image', 'banca'),
            'default'     => [
                'url'     => BANCA_DIR_IMG . '/blog/banner.jpg',
            ]
        ),

        array(
            'id'          => 'blog_single_shape1',
            'type'        => 'media',
            'title'       => __('Banner Shape 01', 'banca'),
            'default'     => [
                'url'     => BANCA_DIR_IMG . '/blog/Polygon-3.png',
            ]
        ),

        array(
            'id'          => 'blog_single_shape2',
            'type'        => 'media',
            'title'       => __('Banner Shape 02', 'banca'),
            'default'     => [
                'url'     => BANCA_DIR_IMG . '/blog/Polygon-4.png',
            ]
        ),

        array(
            'title'     => esc_html__( 'Background Color', 'banca' ),
            'id'        => 'blog_single_banner_bg_color',
            'output'    => '.breadcrumb_area_two',
            'type'      => 'color',
            'mode'      => 'background'
        ),
	)
));
